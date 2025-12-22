document.querySelectorAll(".nav-links").forEach((link) => {
  link.addEventListener("click", function (event) {
    event.preventDefault();
    const url = this.getAttribute("href");

    fetch(url)
      .then((response) => response.text())
      .then((htmlContent) => {
        document.getElementById("content-display").innerHTML = htmlContent;

        history.pushState({ content: htmlContent }, "", url);
      })
      .catch((error) => {
        alert("Content link ERROR");
      });
  });
});
