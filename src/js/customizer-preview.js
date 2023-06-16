wp.customize("ascendia_site_info", function (value) {
  value.bind(function (newVal) {
    var siteInfoElement = document.querySelector(".site-info");
    if (siteInfoElement) {
      siteInfoElement.textContent = newVal;
    }
  });
});
