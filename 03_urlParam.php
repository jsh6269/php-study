<!DOCTYPE html>
<html>
<body>
    <!-- 출력예시
     http://localhost/03_urlParam.php?name=suhan&contact=010-1234-5678
     위의 url로 접근시 아래가 출력됨
      안녕하세요, suhan님.
      contact num: 010-1234-5678

    $_GET는 URL parameter를 받아옴 -->
    
    안녕하세요, <?php echo $_GET['name']; ?>님.
    <p>contact num: <?php echo $_GET['contact']; ?></p>

</body>
</html>