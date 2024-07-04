document.addEventListener('DOMContentLoaded', function () {
    // Initialize Prism for syntax highlighting
    Prism.highlightAll();

    // Initialize Clipboard.js for copy functionality
    new ClipboardJS('.code-container button');
});

function copyCode() {
    var codeSnippet = document.getElementById('codeSnippet');
    var range = document.createRange();
    range.selectNode(codeSnippet);
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);

    try {
        // Execute the copy command
        document.execCommand('copy');
        alert('Code copied to clipboard!');
    } catch (err) {
        console.error('Unable to copy code to clipboard', err);
    }

    window.getSelection().removeAllRanges();
}
