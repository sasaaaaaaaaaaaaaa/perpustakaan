<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">tambah anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="ad_anggota.php?proses=insert" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" class="form-control" id="nama" name= "nama" placeholder="nama anda"required>
                    <div class="col mb-3">
                  </div>
                  <div class="card-body">
                  <div class="form-group">
                    <label for="alamat">alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="alamat anda"required>
                  </div>
                  <div class="form-group">
                    <label for="telepon">telepon</label>
                    <input type="text" class="form-control" id="telepon" placeholder="telepon anda"required>
                  </div>
                  <div class="form-group">
                        <label>select</label>
                        <select class="form-control">
                          <option value="admin">admin</option>
                          <option value="user">user</option>
                        </select>
                      </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> -->
                  
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-warning float-right">simpan</button>
                  <button type="reset" class="btn btn-primary float-right">reset</button>
                </div>
              </form>
            </div>