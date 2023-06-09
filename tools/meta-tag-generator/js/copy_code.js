window.addEventListener("DOMContentLoaded", (e) => {
    const code_data = document.getElementById("total-output");
    const copy_button = document.getElementById("copy-button");
    const copy_button_one_row = document.getElementById("copy-button-one-row");

    copy_button.addEventListener("click", () => {
        let copy_data = code_data.value;
        code_data.select();
        navigator.clipboard.writeText(copy_data);
        alert("コピーしました！");
    });

    copy_button_one_row.addEventListener("click", () => {
        let copy_data = code_data.value.replaceAll("\n", "");
        code_data.select();
        navigator.clipboard.writeText(copy_data);
        alert("改行なしでコピーしました！");
    });
});