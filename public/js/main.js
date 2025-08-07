// Закрытие всех форм
function closeForms() {
  $(".form-contact").css({ display: "none" });
  $(".form-create").css({ display: "none" });
  $(".form-login").css({ display: "none" });
}

// Контакты
$("[data='btn-contact']").click((event) => {
    closeForms();
 $(".form-contact").css({ display: "flex" });
});

// Регистрация
$("[data='btn-create']").click((event) => {
  closeForms();
  $(".form-create").css({ display: "flex" });
});

// Вход
$("[data='btn-login']").click((event) => {
  closeForms();
  $(".form-login").css({ display: "flex" });
});

// Крестик закрытие окна
$(".cross").click((event) => {
  $(event.target).parent(".cross").parent(".form").css({ display: "none" });
});
