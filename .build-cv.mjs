// Build a single-page CV/résumé PDF from the site's own data, using Chrome's
// headless print-to-PDF. Runs both language versions.
import { spawn } from "node:child_process";
import { writeFileSync, mkdtempSync } from "node:fs";
import { join } from "node:path";
import { tmpdir } from "node:os";
import { createServer } from "node:net";
import { homedir } from "node:os";

const CHROME =
  "C:\\Users\\User\\AppData\\Local\\ms-playwright\\chromium-1243\\chrome-win64\\chrome.exe";

const freePort = () =>
  new Promise((res, rej) => {
    const s = createServer();
    s.on("error", rej);
    s.listen(0, "127.0.0.1", () => {
      const p = s.address().port;
      s.close(() => res(p));
    });
  });

const wait = (ms) => new Promise((r) => setTimeout(r, ms));

async function shot(html, outPath) {
  const dir = mkdtempSync(join(tmpdir(), "cv-"));
  const file = join(dir, "cv.html");
  writeFileSync(file, html, "utf8");

  const port = await freePort();
  const chrome = spawn(
    CHROME,
    [
      `--remote-debugging-port=${port}`,
      `--user-data-dir=${join(dir, "profile")}`,
      "--no-sandbox",
      "--disable-dev-shm-usage",
      "--no-first-run",
      "--no-default-browser-check",
      "--headless=new",
      "--print-to-pdf-no-header",
      `--print-to-pdf=${outPath}`,
      "file:///" + file.replace(/\\/g, "/"),
    ],
    { detached: false, stdio: "ignore" },
  );

  await new Promise((res) => chrome.on("exit", res));
  return outPath;
}

export default async function run(page, ui) {
  // Read the CV content straight off the running site so it stays in sync
  const data = await page.evaluate(async () => {
    const res = await fetch("index.php?lang=fa");
    const html = await res.text();
    const doc = new DOMParser().parseFromString(html, "text/html");
    const txt = (sel) => doc.querySelector(sel)?.innerText?.trim() || "";
    return {
      name: txt(".hero h1"),
      role: txt(".hero-sub"),
      intro: txt(".lead"),
      cardText: txt(".card-text"),
      cardList: [...doc.querySelectorAll(".card-list li")].map((li) =>
        li.innerText.trim(),
      ),
      services: [...doc.querySelectorAll(".tile")].map((t) => ({
        title: t.querySelector("h3")?.innerText.trim(),
        desc: t.querySelector("p")?.innerText.trim(),
      })),
      skills: [...doc.querySelectorAll(".path-item")].map((p) => ({
        name: p.querySelector("h3")?.innerText.trim(),
        note: p.querySelector("p")?.innerText.trim(),
      })),
    };
  });

  const fonts = `font-family:'Segoe UI',Tahoma,system-ui,sans-serif;`;
  const css = `
    @page { size:A4; margin:14mm 14mm 12mm; }
    *{box-sizing:border-box}
    body{${fonts} margin:0; color:#1d1f24; font-size:10.5pt; line-height:1.75; }
    h1{font-size:19pt;margin:0 0 2px;}
    .sub{color:#555c66;font-size:11pt;margin:0 0 10px;}
    .rule{height:2px;background:#2f6f5e;margin:0 0 14px;}
    h2{font-size:11pt;color:#2f6f5e;margin:16px 0 7px;padding-bottom:4px;
       border-bottom:1px solid #e4e6ea;letter-spacing:.02em;}
    p{margin:0 0 8px;color:#3b4149;}
    ul{margin:0;padding-inline-start:16px;color:#3b4149;}
    li{margin-bottom:5px;}
    .two{display:flex;gap:12px;flex-wrap:wrap;}
    .two>div{flex:1 1 46%;}
    .item{margin-bottom:9px;}
    .item strong{display:block;color:#1d1f24;}
    .meta{color:#8b939e;font-size:9pt;}
    .tag{display:inline-block;background:#f3f4f2;border-radius:4px;
         padding:2px 8px;margin:0 4px 4px 0;font-size:9pt;color:#555c66;}
    footer{margin-top:16px;padding-top:8px;border-top:1px solid #e4e6ea;
           color:#8b939e;font-size:9pt;}
  `;

  const html = `<!doctype html><html lang="fa" dir="rtl"><head><meta charset="utf-8">
  <style>${css}</style></head><body>
    <h1>${data.name}</h1>
    <p class="sub">${data.role}</p>
    <div class="rule"></div>

    <h2>درباره من</h2>
    <p>${data.intro}</p>
    <p>${data.cardText}</p>
    <ul>${data.cardList.map((l) => `<li>${l}</li>`).join("")}</ul>

    <h2>خدمات</h2>
    <div class="two">
      ${data.services
        .map(
          (s) =>
            `<div class="item"><strong>${s.title}</strong><span>${s.desc}</span></div>`,
        )
        .join("")}
    </div>

    <h2>مهارت‌ها</h2>
    ${data.skills
      .map(
        (s) =>
          `<div class="item"><strong>${s.name}</strong><span>${s.note}</span></div>`,
      )
      .join("")}

    <h2>تماس</h2>
    <p>ایمیل: mmdj3004@gmail.com &nbsp;|&nbsp; گیت‌هاب: github.com/Akyoweb
       &nbsp;|&nbsp; لینکدین: linkedin.com/in/akyoweb
       &nbsp;|&nbsp; تلگرام: t.me/AKYO_O</p>

    <footer>تهران، ایران — ساخته‌شده با PHP و کمی CSS.</footer>
  </body></html>`;

  const out = await shot(
    html,
    process.cwd() + "\\assets\\files\\resume-fa.pdf",
  );
  return out;
}
