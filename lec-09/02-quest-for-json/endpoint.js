function Endpoint() {
  BASE_CITY_IMAGES_API_ENDPOINT =
    "https://www.randyconnolly.com/funwebdev/3rd/api/travel/images.php";

  function imageEndpointFor(city) {
    const cityCode = codeFor(city);
    return `${BASE_CITY_IMAGES_API_ENDPOINT}?city=${cityCode}`;
  }

  function codeFor(city) {
    switch (city.toUpperCase()) {
      case "BANFF":
        return 5892532;
      case "CALGARY":
        return 5913490;
      default:
        return -1;
    }
  }

  this.for = function (city) {
    return imageEndpointFor(city);
  };
}
