function analyzeText() {
    let inputText = document.getElementById("inputText").value;
    let resultDiv = document.getElementById("result");

    if (inputText.trim() === "") {
        resultDiv.innerHTML = `<p class="error"> Please enter some text!</p>`;
        resultDiv.style.display = "block";
        return;
    }

    let charCount = inputText.length;
    let wordCount = inputText.trim().split(" ").filter(w => w.length > 0).length;
    let reversedText = inputText.split('').reverse().join('');

    resultDiv.innerHTML = `
        <h2>Analysis Results:</h2>
        <p><strong>Total Characters:</strong> ${charCount}</p>
        <p><strong>Total Words:</strong> ${wordCount}</p>
        <p><strong>Reversed Text:</strong></p>
        <div class="reversed-box" style="background: white; padding: 15px; border: 1px solid #2a6dd9; border-radius: 8px; font-family: monospace; white-space: pre-wrap;">
            ${reversedText}
        </div>
    `;
    resultDiv.style.display = "block";
}