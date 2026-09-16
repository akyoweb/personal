/* اسکریپت‌های اصلی سایت */

document.addEventListener("DOMContentLoaded", function () {
  /* --- پوسته روشن/تیره با ذخیره انتخاب کاربر --- */
  var themeToggle = document.querySelector(".theme-toggle");
  var root = document.documentElement;
  var savedTheme = null;
  try { savedTheme = localStorage.getItem("portfolio-theme"); } catch (error) {}
  if (savedTheme === "dark" || savedTheme === "light") root.dataset.theme = savedTheme;
  if (themeToggle) {
    var updateThemeLabel = function () {
      var dark = root.dataset.theme === "dark";
      themeToggle.textContent = dark ? "☀" : "☾";
      themeToggle.setAttribute("aria-label", dark ? "پوسته روشن" : "پوسته تاریک");
    };
    updateThemeLabel();
    themeToggle.addEventListener("click", function () {
      root.dataset.theme = root.dataset.theme === "dark" ? "light" : "dark";
      try { localStorage.setItem("portfolio-theme", root.dataset.theme); } catch (error) {}
      updateThemeLabel();
    });
  }

  /* --- منوی موبایل --- */
  var toggle = document.querySelector(".nav-toggle");
  var nav = document.getElementById("siteNav");

  if (toggle && nav) {
    toggle.addEventListener("click", function () {
      var opened = nav.classList.toggle("is-open");
      toggle.setAttribute("aria-expanded", opened ? "true" : "false");
    });

    // بستن منو با کلیک بیرون از آن
    nav.querySelectorAll("a").forEach(function (link) {
      link.addEventListener("click", function () {
        nav.classList.remove("is-open");
        toggle.setAttribute("aria-expanded", "false");
      });
    });
    document.addEventListener("click", function (e) {
      if (!nav.contains(e.target) && !toggle.contains(e.target)) {
        nav.classList.remove("is-open");
        toggle.setAttribute("aria-expanded", "false");
      }
    });
  }

  /* --- نوار مهارت‌ها: پر شدن با دیدن بخش --- */
  var skills = document.querySelectorAll(".skill");

  var fillSkill = function (el) {
    var level = parseInt(el.dataset.level, 10) || 0;
    var bar = el.querySelector(".skill-bar span");
    if (bar) {
      bar.style.width = level + "%";
    }
  };

  if (skills.length) {
    if ("IntersectionObserver" in window) {
      var observer = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              fillSkill(entry.target);
              observer.unobserve(entry.target);
            }
          });
        },
        { threshold: 0.35 }
      );

      skills.forEach(function (skill) {
        observer.observe(skill);
      });
    } else {
      skills.forEach(fillSkill);
    }
  }

  /* --- انیمیشن ورود کارت‌ها --- */
  if ("IntersectionObserver" in window) {
    var revealObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-revealed");
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });
    document.querySelectorAll(".reveal").forEach(function (item) { revealObserver.observe(item); });
  }

  /* --- شمارنده حروف در فرم تماس --- */
  var textarea = document.getElementById("message");
  var counter = document.getElementById("charCount");

  if (textarea && counter) {
    var update = function () {
      counter.textContent = textarea.value.length.toLocaleString("fa-IR");
    };
    textarea.addEventListener("input", update);
    update();
  }

  /* --- دکمه بازگشت به بالا --- */
  var toTop = document.querySelector(".to-top");

  if (toTop) {
    var onScroll = function () {
      toTop.classList.toggle("is-visible", window.scrollY > 400);
    };

    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();

    toTop.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }
});
