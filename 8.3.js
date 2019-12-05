var sportUrl = "sportNews.txt";
    var politicsUrl = "politicsNews.txt";
    var businessUrl = "bussinessNews.txt";
    var sportButton = document.querySelector("#sport");
    var politicsButton = document.querySelector("#politics");
    var businessButton = document.querySelector("#bussiness");
    var newsDiv = document.querySelector("#news");
priceFilter = () => {
    let ordered = studios.sort((a, b) => (a.price > b.price) ? 1 : -1);
    let lastElement = ordered.pop();
    return ordered.unshift(lastElement);
  }