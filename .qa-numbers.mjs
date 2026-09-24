// Check every numbered/ordered element for wrong-side placement in English (ltr)
export default async function run(page, ui) {
  const out = [];
  for (const lang of ["fa", "en"]) {
    await page.setViewportSize({ width: 1280, height: 900 });
    await page.goto(`http://localhost/personal/about.php?lang=${lang}`, {
      waitUntil: "load",
    });
    await page.waitForTimeout(300);
    const info = await page.evaluate(() => {
      const dir = document.documentElement.dir;
      const grab = (sel, pseudo) => {
        const el = document.querySelector(sel);
        if (!el) return null;
        const cs = getComputedStyle(el, pseudo);
        return {
          paddingLeft: cs.paddingLeft,
          paddingRight: cs.paddingRight,
          borderLeftWidth: cs.borderLeftWidth,
          borderRightWidth: cs.borderRightWidth,
          marginLeft: cs.marginLeft,
          marginRight: cs.marginRight,
        };
      };
      const stepsBefore = (() => {
        const el = document.querySelector(".steps li");
        if (!el) return null;
        const cs = getComputedStyle(el, "::before");
        return { left: cs.left, right: cs.right, text: cs.content };
      })();
      return {
        dir,
        stepsLi: grab(".steps li"),
        stepsBefore,
        tileNumber: grab(".tile-number"),
        pathIndex: grab(".path-index"),
        timelinePeriod: grab(".timeline-period"),
      };
    });
    out.push({ lang, ...info });
  }
  return out;
}
