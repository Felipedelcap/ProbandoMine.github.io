window.onload = function () {
  openTab('content1');
}

function openTab(contentId) {
  var contents = document.querySelectorAll(".content");
  contents.forEach(function (content) {
      content.style.display = "none";
  });
  document.getElementById(contentId).style.display = "block";
}
