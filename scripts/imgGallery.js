// define angular module/app
let app = angular.module("galleryApp", ["ngAnimate"]);

// create angular controller and pass the $scope and $interval
app.controller("GalleryCtrl", function ($scope, $interval) {
  // create array of images
  $scope.images = [
    {
      src: "src/cardio.jpg",
      alt: "cardio",
    },
    {
      src: "src/supplements.jpg",
      alt: "supplements",
    },
    {
      src: "src/calorie.jpg",
      alt: "calorie",
    },
  ];

  // keep track of current image
  $scope.activeImage = 0;

  // interate through images
  $interval(function () {
    $scope.activeImage = ($scope.activeImage + 1) % $scope.images.length;
  }, 2500);

  $scope.isActive = function (image) {
    return $scope.images.indexOf(image) === $scope.activeImage;
  };
});
