function hidden() {
  $("section").css("display", "none");
}

$("li[menu-item]").click((e) => {
  hidden();
  $id = $(e.target).attr("id");
  console.log($("section#" + $id))
  $("section#" + $id).css("display", "block");
});
