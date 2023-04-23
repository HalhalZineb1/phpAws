const searchBox = document.querySelector(".search-box");
const searchInput = document.querySelector("input[type='text']");
const searchButton = document.querySelector("button");
const resultBox = document.querySelector(".result-box");
const resultsList = document.querySelector(".results");

searchBox.addEventListener("submit", (event) => {
  event.preventDefault();
  search();
});

function search() {
  const query = searchInput.value;
  const url = `https://api.stackexchange.com/2.2/search/advanced?order=desc&sort=relevance&q=${query}&site=stackoverflow&filter=!b1MMEIWEEeqZbK`;

  fetch(url)
    .then(response => response.json())
    .then(data => {
      resultsList.innerHTML = "";

      if (data.items.length === 0) {
        const message = document.createElement("li");
        message.textContent = "Aucun résultat trouvé.";
        resultsList.appendChild(message);
      } else {
        data.items.forEach(item => {
          const title = item.title;
          const link = item.link;

          const li = document.createElement("li");
          const titleElement = document.createElement("h3");
          const linkElement = document.createElement("a");
          const linkText = document.createTextNode("Voir la réponse");

          titleElement.textContent = title;
          linkElement.href = link;
          linkElement.target = "_blank";
          linkElement.appendChild(linkText);

          li.appendChild(titleElement);
          li.appendChild(linkElement);

          resultsList.appendChild(li);
        });
      }
    })
    .catch(error => {
      console.error(error);
    });
}
