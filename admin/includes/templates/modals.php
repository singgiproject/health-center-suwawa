<!-- Modal Logout -->
<div class="modal fade" id="modalLogout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Keluar?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Anda yakin ingin mengkahiri sesi anda saat ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
        <form action="<?= $url; ?>dashboard/delete" method="post">
          <input hidden type="text" name="id" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($row["id"]))))))))); ?>">
          <a href="<?= $url ?>auth/logout" class="btn btn-danger">
            Keluar
          </a>
        </form>
      </div>
    </div>
  </div>
</div>