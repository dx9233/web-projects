// For RU

(async function () {
  try {
    const res = await fetch("https://api.country.is/");
    const data = await res.json();
    const country = data.country.toLowerCase();

    const allowedCountries = ["ru"];

    if (!allowedCountries.includes(country)) {
      window.location.href = "404.html";
    }
  } catch (e) {
    window.location.href = "404.html";
  }
})();

// For EN

(async function () {
  try {
    const res = await fetch("https://api.country.is/");
    const data = await res.json();
    const country = data.country.toLowerCase();

    // List of permitted countries for the English version
    const allowedCountries = ["us", "gb", "ca", "au", "de"];

    if (!allowedCountries.includes(country)) {
      // Country does not match — redirect to 404
      window.location.href = "404.html";
    }
  } catch (e) {
    // if the IP could not be determined — also 404
    window.location.href = "404.html";
  }
})();

// Blocked Countries

const blockedCountries = ["ru", "cn", "ir", "kp"];

if (blockedCountries.includes(country)) {
  window.location.href = "/404.html";
}

// Allowed Countries

const allowedCountries = [
  "us", "ca", "gb", "au", "nz", 
  "fr", "de", "it", "es", "pt", 
  "nl", "be", "ch", "at",       
  "se", "no", "fi", "dk",       
  "ie", "lu"                  
];
