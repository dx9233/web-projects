const switcher = document.getElementById("language-switcher");

if (switcher) {
  const pathParts = window.location.pathname.split("/");
  const currentLang = pathParts[1];

  if (["ru", "en", "es"].includes(currentLang)) {
    switcher.value = currentLang;
  }

  switcher.addEventListener("change", function () {
    const newLang = this.value;

    const page = pathParts.slice(2).join("/") || "";

    const newUrl = `${window.location.origin}/${newLang}/${page}`;

    window.location.href = newUrl;
  });
}