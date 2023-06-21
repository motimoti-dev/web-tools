window.addEventListener("DOMContentLoaded", (e) => {
    const before_textarea = document.getElementById("before-text");
    const after_textarea = document.getElementById("after-text");
    const button_box = document.querySelector(".button-box");
    const add_button = document.getElementById("add-button");
    const del_button = document.getElementById("del-button");
    let id_num = 1;

    before_textarea.addEventListener("input", textReplace);
    let replace_trigger = document.getElementsByClassName("replace-trigger");
    for(let i = 0; i < replace_trigger.length; i++){
        replace_trigger[i].addEventListener("input", textReplace);
    }

    function textReplace(){
        let replace_num = document.querySelectorAll(`[id^="before-replace"]`).length;
        let replece_content = before_textarea.value;
        for(let i = 0; i < replace_num; i++){
            let before_replace = document.getElementById(`before-replace-${i}`).value;
            let after_replace = document.getElementById(`after-replace-${i}`).value;
            replece_content = replece_content.replaceAll(before_replace, after_replace);
        }
        after_textarea.value = replece_content;
    }

    add_button.addEventListener("click", () => {
        let replace_box = document.createElement("div");
        let before_content = document.createElement("input");
        let after_content = document.createElement("input");

        replace_box.classList.add("replace-box")

        before_content.type = "text";
        before_content.classList.add("replace-trigger");
        before_content.setAttribute("id", `before-replace-${id_num}`);
        before_content.setAttribute("placeholder","入れ替えたい文字");
        after_content.type = "text";
        after_content.classList.add("replace-trigger");
        after_content.setAttribute("id", `after-replace-${id_num}`);
        after_content.setAttribute("placeholder", "入れ替え後の文字");
        id_num += 1;

        let arrow = document.createElement("span");
        let arrow_f = document.createTextNode("\u0020→\u0020");
        arrow.appendChild(arrow_f);

        replace_box.appendChild(before_content);
        replace_box.appendChild(arrow);
        replace_box.appendChild(after_content);

        button_box.before(replace_box);

        let replace_trigger = document.getElementsByClassName("replace-trigger");
        for(let i = 0; i < replace_trigger.length; i++){
            replace_trigger[i].addEventListener("input", textReplace);
        }
    });

    del_button.addEventListener("click", () => {
        if(document.querySelector(".replace-container").childElementCount > 2){
            button_box.previousElementSibling.remove();
            id_num -= 1;
        }
        textReplace();
    });
});