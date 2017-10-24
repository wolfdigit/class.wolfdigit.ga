<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="utf-8">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
  <script src="https://cdn.bootcss.com/highlightjs-line-numbers.js/2.1.0/highlightjs-line-numbers.min.js"></script>
  <style>
    td.hljs-ln-numbers {
        padding-right: 0.5em;
    }
  </style>
</head>
<body>
    <pre style="position:absolute; top:0; left:0; margin:0"><code id="c_code" class="cpp"><?=htmlspecialchars(trim($c_code,"\n"))?></code></pre>
    <script>
        hljs.highlightBlock(document.getElementById('c_code'));
        hljs.lineNumbersBlock(document.getElementById('c_code'));
    </script>
</body>
</html>