export default async function run(page, ui) {
  await page.setViewportSize({ width: 1100, height: 900 });
  await page.goto("http://localhost/personal/about.php?lang=en", {
    waitUntil: "load",
  });
  await page.waitForTimeout(400);
  await page.evaluate(() => {
    document.querySelector(".steps").scrollIntoView({ block: "center" });
  });
  await page.waitForTimeout(300);
  await page.screenshot({ path: "steps-en.png" });
  return "ok";
}
