fetch("includes/twitch-api.php")
.then(res => res.json())
.then(data => {

    const page = document.getElementById("livePage");

    if (data.data.length === 0) {
        document.getElementById("status").innerText = "Hors ligne";
        return;
    }

    const stream = data.data[0];

    const title = stream.title;
    const category = stream.game_name;

    document.getElementById("streamTitle").innerText = title;
    document.getElementById("streamCategory").innerText = category;
    document.getElementById("status").innerText = "En direct";

    // 🎮 Player Twitch
    new Twitch.Player("player", {
        channel: "nom_de_ta_chaine",
        width: "100%",
        height: 500
    });

    // 🎨 Variation dynamique du background
    changeBackground(category);
});

function changeBackground(category) {

    const page = document.getElementById("livePage");

    const themes = {
        "Just Chatting": "chatting",
        "Films & Animation": "film",
        "Comics": "comics",
        "Science & Technology": "tech",
        "Gaming": "game"
    };

    const theme = themes[category] || "default";

    page.classList.add("theme-" + theme);
}
