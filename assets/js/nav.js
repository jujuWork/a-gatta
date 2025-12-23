document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".nav-links").forEach((link) => {
    link.addEventListener("click", function (event) {
      event.preventDefault();
      const url = this.getAttribute("href");

      console.log("Fetching:", url);

      fetch(url)
        .then((response) => response.text())
        .then((htmlContent) => {
          // Parse the fetched HTML
          const parser = new DOMParser();
          const doc = parser.parseFromString(htmlContent, "text/html");

          // Extract the content-display section from the fetched page
          const newContent = doc.querySelector("#content-display");

          if (newContent) {
            document.getElementById("content-display").innerHTML =
              newContent.innerHTML;
            console.log("Content loaded successfully");
          } else {
            document.getElementById("content-display").innerHTML = htmlContent;
            console.log("Used fallback HTML");
          }

          history.pushState(
            { content: newContent ? newContent.innerHTML : htmlContent },
            "",
            url
          );
        })
        .catch((error) => {
          console.error("Fetch error:", error);
          alert("Content link ERROR");
        });
    });

    window.addEventListener("postate", function (event) {
      if (event.state && event.state.content) {
        document.getElementById("content-display").innerHTML =
          event.state.content;
      } else {
        location.reload();
      }
    });
  });

  window.addEventListener("popstate", function (event) {
    if (event.state && event.state && event.state.html) {
      document.getElementById("content-display").innerHTML =
        event.state.content;
    } else {
      this.window.location.href = this.window.location.pathname;
    }
  });
});
