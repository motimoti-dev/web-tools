window.addEventListener("DOMContentLoaded", (event) => {
    // charset
    const charset_trigger = document.getElementsByClassName("charset-elem");
    const char_code = document.getElementById("char-code");
    const charset_out = document.getElementById("charset-output");
    for(let i = 0; i < charset_trigger.length; i++){
        charset_trigger[i].addEventListener("change", () => {
            charset_out.textContent = `<meta charset="${char_code.value}">`;
            createCode();
        });
    }

    // description
    const description_trigger = document.getElementsByClassName("description-elem");
    const description_sentence = document.getElementById("description-sentence");
    const description_out = document.getElementById("description-output");
    for(let i = 0; i < description_trigger.length; i++){
        description_trigger[i].addEventListener("input", () => {
            description_out.textContent = `<meta name="description" content="${description_sentence.value}">`;
            createCode();
        });
    }

    // viewport
    const viewport_trigger = document.getElementsByClassName("viewport-elem");
    const viewport_width = document.getElementById("viewport-width");
    const viewport_initial_scale = document.getElementById("viewport-initial-scale");
    const viewport_user_scalable = document.getElementById("viewport-user-scalable");
    const viewport_out = document.getElementById("viewport-output");
    for(let i = 0; i < viewport_trigger.length; i++){
        viewport_trigger[i].addEventListener("change", () => {
            viewport_out.textContent = `<meta name="viewport" content="width=${viewport_width.value}, initial-scale=${viewport_initial_scale.value}, user-scalable=${viewport_user_scalable.value}">`;
            createCode();
        });
    }

    // theme-color
    const theme_color_trigger = document.getElementsByClassName("theme-color-elem");
    const theme_color_picker = document.getElementById("theme-color-picker");
    const theme_color_result = document.getElementById("theme-color-result");
    const theme_color_out = document.getElementById("theme-color-output");
    for(let i = 0; i < theme_color_trigger.length; i++){
        theme_color_trigger[i].addEventListener("change", () => {
            theme_color_out.textContent = `<meta name="theme-color" content="${theme_color_picker.value}">`;
            theme_color_result.textContent = `選択:${theme_color_picker.value}`;
            createCode();
        });
    }

    // og
    const og_trigger = document.getElementsByClassName("og-elem");
    const og_out = document.getElementById("og-output");

    const og_site_name_flag = document.getElementById("og-site-name-flag");
    const og_site_name_sentence = document.getElementById("og-site-name-sentence");
    const og_url_flag = document.getElementById("og-url-flag");
    const og_url_sentence = document.getElementById("og-url-sentence");
    const og_type_flag = document.getElementById("og-type-flag");
    const og_type_sentence = document.getElementById("og-type-sentence");
    const og_title_flag = document.getElementById("og-title-flag");
    const og_title_sentence = document.getElementById("og-title-sentence");
    const og_description_flag = document.getElementById("og-description-flag");
    const og_description_sentence = document.getElementById("og-description-sentence");
    const og_image_flag = document.getElementById("og-image-flag");
    const og_image_sentence = document.getElementById("og-image-sentence");
    
    const og_child_trigger = document.getElementsByClassName("og-child-trigger");

    for(let i = 0; i < og_child_trigger.length; i++){
        og_child_trigger[i].addEventListener("change", createOgCode);
    }
    for(let i = 0; i < og_trigger.length; i++){
        og_trigger[i].addEventListener("input", () => {
            createOgCode();
        });
    }

    function createOgCode(){
        let total_og_code = "";
        if(og_site_name_flag.checked){
            total_og_code += `<meta property="og:site_name" content="${og_site_name_sentence.value}">\n`;
        }
        if(og_url_flag.checked){
            total_og_code += `<meta property="og:url" content="${og_url_sentence.value}">\n`;
        }
        if(og_type_flag.checked){
            total_og_code += `<meta property="og:type" content="${og_type_sentence.value}">\n`;
        }
        if(og_title_flag.checked){
            total_og_code += `<meta property="og:title" content="${og_title_sentence.value}">\n`;
        }
        if(og_description_flag.checked){
            total_og_code += `<meta property="og:description" content="${og_description_sentence.value}">\n`;
        }
        if(og_image_flag.checked){
            total_og_code += `<meta property="og:image" content="${og_image_sentence.value}">\n`;
        }
        og_out.textContent = total_og_code
        createCode();
    }

    // robots
    const robots_trigger = document.getElementsByClassName("robots-elem");
    const robots_directive = document.getElementById("robots-directive");
    const robots_out = document.getElementById("robots-output");
    for(let i = 0; i < robots_trigger.length; i++){
        robots_trigger[i].addEventListener("change", () => {
            robots_out.textContent = `<meta name="robots" content="${robots_directive.value}">`;
            createCode();
        });
    }

    // twitter
    const twitter_trigger = document.getElementsByClassName("twitter-elem");
    const twitter_out = document.getElementById("twitter-output");

    const twitter_card_flag = document.getElementById("twitter-card-flag");
    const twitter_card_sentence = document.getElementById("twitter-card-sentence");
    const twitter_site_flag = document.getElementById("twitter-site-flag");
    const twitter_site_sentence = document.getElementById("twitter-site-sentence");
    const twitter_title_flag = document.getElementById("twitter-title-flag");
    const twitter_title_sentence = document.getElementById("twitter-title-sentence");
    const twitter_description_flag = document.getElementById("twitter-description-flag");
    const twitter_description_sentence = document.getElementById("twitter-description-sentence");
    const twitter_image_flag = document.getElementById("twitter-image-flag");
    const twitter_image_sentence = document.getElementById("twitter-image-sentence");
    
    const twitter_child_trigger = document.getElementsByClassName("twitter-child-trigger");

    for(let i = 0; i < twitter_child_trigger.length; i++){
        twitter_child_trigger[i].addEventListener("change", createTwitterCode);
    }
    for(let i = 0; i < twitter_trigger.length; i++){
        twitter_trigger[i].addEventListener("input", () => {
            createTwitterCode();
        });
    }

    function createTwitterCode(){
        let total_twitter_code = "";
        if(twitter_card_flag.checked){
            total_twitter_code += `<meta name="twitter:card" content="${twitter_card_sentence.value}">\n`;
        }
        if(twitter_site_flag.checked){
            total_twitter_code += `<meta name="twitter:site" content="${twitter_site_sentence.value}">\n`;
        }
        if(twitter_title_flag.checked){
            total_twitter_code += `<meta name="twitter:title" content="${twitter_title_sentence.value}">\n`;
        }
        if(twitter_description_flag.checked){
            total_twitter_code += `<meta name="twitter:description" content="${twitter_description_sentence.value}">\n`;
        }
        if(twitter_image_flag.checked){
            total_twitter_code += `<meta name="twitter:image" content="${twitter_image_sentence.value}">\n`;
        }
        twitter_out.textContent = total_twitter_code;
        createCode();
    }

    // msapplication
    const msapplicatiom_trigger = document.getElementsByClassName("msapplication-elem");
    const msapplication_tile_image_sentence = document.getElementById("msapplication-tile-image-sentence");
    const msapplication_out = document.getElementById("msapplication-output");
    for(let i = 0; i < msapplicatiom_trigger.length; i++){
        msapplicatiom_trigger[i].addEventListener("input", () => {
            msapplication_out.textContent = `<meta name="msapplication-TileImage" content="${msapplication_tile_image_sentence.value}">`;
            createCode();
        });
    }

    // keywords
    const keywords_trigger = document.getElementsByClassName("keywords-elem");
    const keywords_sentence = document.getElementById("keywords-sentence");
    const keywords_out = document.getElementById("keywords-output");
    for(let i = 0; i < keywords_trigger.length; i++){
        keywords_trigger[i].addEventListener("input", () => {
            keywords_out.textContent = `<meta name="keywords" content="${keywords_sentence.value}">`;
            createCode();
        });
    }

    // author
    const author_trigger = document.getElementsByClassName("author-elem");
    const author_sentence = document.getElementById("author-sentence");
    const author_out = document.getElementById("author-output");
    for(let i = 0; i < author_trigger.length; i++){
        author_trigger[i].addEventListener("input", () => {
            author_out.textContent = `<meta name="author" content="${author_sentence.value}">`;
            createCode();
        });
    }

    // other
    const other_trigger = document.getElementsByClassName("other-elem");
    const other_out = document.getElementById("other-output");

    const apple_touch_icon_precomposed_trigger = document.getElementsByClassName("apple-touch-icon-precomposed-elem");
    const apple_touch_icon_precomposed_sentence = document.getElementById("apple-touch-icon-precomposed-sentence");
    const apple_touch_icon_precomposed_output = document.getElementById("apple-touch-icon-precomposed-output");
    const apple_touch_icon_precomposed_flag = document.getElementById("apple-touch-icon-precomposed-flag");   
    for(let i = 0; i < apple_touch_icon_precomposed_trigger.length; i++){
        apple_touch_icon_precomposed_trigger[i].addEventListener("input", () => {
            apple_touch_icon_precomposed_output.textContent = `<link rel="apple-touch-icon-precomposed" href="${apple_touch_icon_precomposed_sentence.value}">`;
            createOtherCode();
        });
    }

    const icon_trigger = document.getElementsByClassName("icon-elem");
    const icon_sentence = document.getElementById("icon-sentence");
    const icon_output = document.getElementById("icon-output");
    const icon_flag = document.getElementById("icon-flag");   
    for(let i = 0; i < icon_trigger.length; i++){
        icon_trigger[i].addEventListener("input", () => {
            icon_output.textContent = `<link rel="icon" href="${icon_sentence.value}">`;
            createOtherCode();
        });
    }

    const canonical_trigger = document.getElementsByClassName("canonical-elem");
    const canonical_sentence = document.getElementById("canonical-sentence");
    const canonical_output = document.getElementById("canonical-output");
    const canonical_flag = document.getElementById("canonical-flag");   
    for(let i = 0; i < canonical_trigger.length; i++){
        canonical_trigger[i].addEventListener("input", () => {
            canonical_output.textContent = `<link rel="canonical" href="${canonical_sentence.value}">`;
            createOtherCode();
        });
    }

    const title_trigger = document.getElementsByClassName("title-elem");
    const title_sentence = document.getElementById("title-sentence");
    const title_output = document.getElementById("title-output");
    const title_flag = document.getElementById("title-flag");   
    for(let i = 0; i < title_trigger.length; i++){
        title_trigger[i].addEventListener("input", () => {
            title_output.textContent = `<title>${title_sentence.value}</title>`;
            createOtherCode();
        });
    }
    
    const other_child_trigger = document.getElementsByClassName("other-child-trigger");

    for(let i = 0; i < other_child_trigger.length; i++){
        other_child_trigger[i].addEventListener("change", createOtherCode);
    }
    for(let i = 0; i < other_trigger.length; i++){
        other_trigger[i].addEventListener("input", () => {
            createOtherCode();
        });
    }

    function createOtherCode(){
        let total_other_code = "";
        if(apple_touch_icon_precomposed_flag.checked){
            total_other_code += `<link rel="apple-touch-icon-precomposed" href="${apple_touch_icon_precomposed_sentence.value}">\n`;
        }
        if(icon_flag.checked){
            total_other_code += `<link rel="icon" href="${icon_sentence.value}">\n`;
        }
        if(canonical_flag.checked){
            total_other_code += `<link rel="canonical" href="${canonical_sentence.value}">\n`;
        }
        if(title_flag.checked){
            total_other_code += `<title>${title_sentence.value}</title>\n`;
        }
        other_out.textContent = total_other_code;
        createCode();
    }

    // checkbox
    const checkbox_trigger = document.getElementsByClassName("checkbox-trigger");
    for(let i = 0; i < checkbox_trigger.length; i++){
        checkbox_trigger[i].addEventListener("change", createCode);
    }

    // total
    const charset_flag = document.getElementById("charset-flag");
    const description_flag = document.getElementById("description-flag");
    const viewport_flag = document.getElementById("viewport-flag");
    const theme_color_flag = document.getElementById("theme-color-flag");
    const og_flag = document.getElementById("og-flag");
    const robots_flag = document.getElementById("robots-flag");
    const twitter_flag = document.getElementById("twitter-flag");
    const msapplication_flag = document.getElementById("msapplication-flag");
    const keywords_flag = document.getElementById("keywords-flag");
    const author_flag = document.getElementById("author-flag");
    const other_flag = document.getElementById("other-flag");
    const total_output = document.getElementById("total-output");
    function createCode(){
        let total_code = "";
        if(charset_flag.checked){
            total_code += `${charset_out.textContent}\n`;
        }
        if(description_flag.checked){
            total_code += `${description_out.textContent}\n`;
        }
        if(viewport_flag.checked){
            total_code += `${viewport_out.textContent}\n`;
        }
        if(theme_color_flag.checked){
            total_code += `${theme_color_out.textContent}\n`;
        }
        if(og_flag.checked){
            total_code += `${og_out.textContent}`;
        }
        if(robots_flag.checked){
            total_code += `${robots_out.textContent}\n`;
        }
        if(twitter_flag.checked){
            total_code += `${twitter_out.textContent}`;
        }
        if(msapplication_flag.checked){
            total_code += `${msapplication_out.textContent}\n`;
        }
        if(keywords_flag.checked){
            total_code += `${keywords_out.textContent}\n`;
        }
        if(author_flag.checked){
            total_code += `${author_out.textContent}\n`;
        }
        if(other_flag.checked){
            total_code += `${other_out.textContent}`;
        }
        console.log(`inner:${og_out.innerText}\ntextContent:${og_out.textContent}`);
        total_output.textContent = total_code;
    }
});