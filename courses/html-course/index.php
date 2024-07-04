<?php include 'includes/header.html' ?>
<div  class="learn-container">
    <div class="sidebar">
    <?php include 'includes/sidebar-item.html' ?>
    </div>
    <div class="content">
    <div class="container">
        <h1>Coding Chapter: Introduction to Web Development</h1>
        <p>
            Welcome to the introduction to web development! In this chapter, we'll cover the fundamental concepts and technologies that form the backbone of web development.
        </p>
        <h2>List of Topics:</h2>
        <ul>
            <li><a href="#topic1">HTML Basics</a></li>
            <li><a href="#topic2">CSS Styling</a></li>
            <li><a href="#topic3">JavaScript Fundamentals</a></li>
            <!-- Add more topics as needed -->
        </ul>

        <h2 id="topic1">Topic 1: HTML Basics</h2>
        <p>
            HTML (Hypertext Markup Language) is the standard markup language for creating web pages. It provides the structure for web content using various elements and tags.
        </p>
        <code>&lt;html&gt;</code>, <code>&lt;head&gt;</code>, <code>&lt;body&gt;</code>, and more.

        <h2 id="topic2">Topic 2: CSS Styling</h2>
        <p>
            CSS (Cascading Style Sheets) is used for styling HTML documents. It allows you to control the layout and appearance of multiple pages at once.
        </p>
        <code>color</code>, <code>font-size</code>, <code>margin</code>, <code>padding</code>, etc.

        <h2 id="topic3">Topic 3: JavaScript Fundamentals</h2>
        <p>
            JavaScript is a programming language that enables interactive web pages. It adds behavior to web pages by allowing you to manipulate the HTML and respond to user actions.
        </p>
        <code>variables</code>, <code>functions</code>, <code>events</code>, etc.

        <div class="code-container">
        <pre class="line-numbers">
            <code class="language-javascript" id="codeSnippet">
// Your code snippet goes here
function greet(name) {
    return "Hello, " + name + "!";
}

// Your code snippet goes here
var a=23;
var b=30;
document.write("hello java script");
            </code>
        </pre>
        <button onclick="copyCode()">Copy</button>
    </div>
    </div>
   
    </div>
    <div class="sidebar2">
       <p>Advertisement</p>
    </div>
</div>

<?php include 'includes/footer.html' ?>
