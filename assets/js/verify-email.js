function moveToNext(current, nextFieldID) {
    if (current.value.length === 1) {
        document.getElementById(nextFieldID).focus();
    }
}

function moveToPrev(event, prevFieldID) {
    if (event.key === "Backspace" && event.target.value === "") {
        document.getElementById(prevFieldID).focus();
    }
}