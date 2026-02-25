const puppeteer = require('puppeteer');
(async () => {
  const browser = await puppeteer.launch();
  const page = await browser.newPage();
  await page.setViewport({ width: 1280, height: 1024 });
  await page.goto('http://localhost/gojacdoors/product-detail.php', { waitUntil: 'networkidle0' });
  await page.screenshot({ path: '/Users/samueleke/.gemini/antigravity/brain/7a64b02b-041e-453a-a1fc-a3a79b744841/product_detail_test.jpg', fullPage: true });
  await browser.close();
})();
