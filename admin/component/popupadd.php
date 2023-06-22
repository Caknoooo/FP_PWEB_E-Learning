<div class="button-add-student">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Course</button>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Courses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="addcourse.php" enctype="multipart/form-data">
            <div class="">
              <label for="recipient-name" class="col-form-label">Image</label>
              <input type="file" class="form-control" id="recipient-name" accept=".jpg,.png,.jpeg" name="img">
            </div>
            <div class="">
              <label for="recipient-name" class="col-form-label">Nama</label>
              <input type="text" class="form-control" id="recipient-name" name="name">
            </div>
            <div class="">
              <label for="recipient-name" class="col-form-label">Deskripsi</label>
              <input type="text" class="form-control" id="recipient-name" name="deskripsi">
            </div>
            <div class="">
              <label for="recipient-name" class="col-form-label">Jumlah Modul</label>
              <input type="text" class="form-control" id="recipient-name" name="jumlah_modul">
            </div>
            <div class="">
              <label for="recipient-name" class="col-form-label">Tingkat</label>
              <input type="text" class="form-control" id="recipient-name" name="tingkat">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="submit" class="btn btn-primary">Add Course</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>