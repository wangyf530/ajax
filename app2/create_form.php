

<!-- Modal -->
<div class="modal fade" id="CreateModal" tabindex="-1" aria-labelledby="CreateModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="api/insert.php" method="post">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="CreateModalLabel">新增學生</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
          <label for="uni_id" class="form-label">學號</label>
          <input type="text" class="form-control" id="uni_id" name="uni_id" >
      </div>
      <div class="mb-3">
          <label for="seat_num" class="form-label">座號</label>
          <input type="text" class="form-control" id="seat_num" name="seat_num" >
      </div>
      <div class="mb-3">
          <label for="name" class="form-label">姓名</label>
          <input type="text" class="form-control" id="name" name="name" >
      </div>
      <div class="mb-3">
          <label for="classroom" class="form-label">班級</label>
          <input type="text" class="form-control" id="classroom" name="classroom" >
      </div>
      <div class="mb-3">
          <label for="major" class="form-label">科系</label>
          <input type="text" class="form-control" id="major" name="major" >
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
        <button type="submit" class="btn btn-primary" id="send">儲存</button>
      </div>
    </form>
    </div>
  </div>
</div>

<script>
  $("#send").on("click",function(){
    let formData = {
      // 動態取得表單資料
      'uni_id':$("#uniid").val(),
      'seat_num':$("#seat_num").val(),
      'name':$("#name").val(),
      'classroom':$("#classroom").val(),
      'major':$("#major").val()
    }

    $.post("api/insert.php",formData,function(){
      // 這套動作做完之後 更新班級資料
      getClasses()
      alert("added")
      CreateModal.hide();
      CreateModal.dispose();
      $("#modal").html('');
    })

    console.log(formData);
  })
</script>