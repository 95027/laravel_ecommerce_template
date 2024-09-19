// Function to update greeting and time
function updateGreeting() {
    const now = new Date();
    const hours = now.getHours();
    let greeting = "Good Morning";

    if (hours >= 12 && hours < 18) {
        greeting = "Good Afternoon";
    } else if (hours >= 18) {
        greeting = "Good Evening";
    }
    document.getElementById("greeting").textContent = greeting;
    const options = {
        weekday: "long",
        year: "numeric",
        month: "long",
        day: "numeric",
    };
    const dateString = now.toLocaleDateString(undefined, options);
    const timeString = now.toLocaleTimeString();

    document.getElementById(
        "dateTime"
    ).textContent = `${dateString}, ${timeString}`;
}
window.onload = updateGreeting;
setInterval(updateGreeting, 1000);
