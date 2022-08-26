const tabs = document.querySelectorAll(".type");
const tabsContent = document.querySelectorAll(".item__person_article");

tabs.forEach((tab) => {
  tab.addEventListener("mouseover", function (e) {
    const clicked = e.target.closest(".type");
    console.log(clicked);
    if (!clicked) return;
    console.log(clicked.dataset.object);
    tabsContent.forEach((tab) => tab.classList.remove("reveal"));
    document
      .querySelector(`.type_text${clicked.dataset.object}`)
      .classList.add("reveal");
  });
});
