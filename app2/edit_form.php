<?php include_once "./api/db.php";
$id = $_GET['id'];
$row = $Stu->find($id); 
// dd($id,$row);
?>
<!-- Modal -->
<div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="EditModalLabel">編輯學生</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="uni_id" class="form-label">學號</label>
                        <input type="text" class="form-control" id="uni_id" name="uni_id" value="<?=$row['uni_id']?>">
                    </div>
                    <div class="mb-3">
                        <label for="seat_num" class="form-label">座號</label>
                        <input type="text" class="form-control" id="seat_num" name="seat_num"
                            value="<?=$row['seat_num']?>">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">姓名</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?=$row['name']?>">
                    </div>
                    <div class="mb-3">
                        <label for="classroom" class="form-label">班級</label>
                        <input type="text" class="form-control" id="classroom" name="classroom"
                            value="<?=$row['classroom']?>">
                    </div>
                    <div class="mb-3">
                        <label for="major" class="form-label">科系</label>
                        <input type="text" class="form-control" id="major" name="major" value="<?=$row['major']?>">
                    </div>
                    <input type="hidden" name="id" id="userId" value="<?=$row['id']?>">
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
$("#send").on("click", function(event) {
    event.preventDefault();
    let formData = {
        // 動態取得表單資料
        'uni_id': $("#uni_id").val(),
        'seat_num': $("#seat_num").val(),
        'name': $("#name").val(),
        'classroom': $("#classroom").val(),
        'major': $("#major").val(),
        'id': $("#userId").val()
    }

    console.log(formData);
    $.post("api/update.php", formData, function() {
        // 這套動作做完之後 更新班級資料
        getClasses()
        alert("edited")

        query(formData.classroom)
        EditModal.hide();
        $("#CreateModal").on("hidden.bs.modal", function() {
            EditModal.dispose();
            $("#modal").html('');
            query(formData.classroom)
        })
    })

})
</script>