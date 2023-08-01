 <?php if ($_GET["print"] === "medical-record") : ?>
   <!-- ====================================
       TEMPLATE MEDICAL RECORDS PRINT 
       ===================================-->
   <section class="medical-records-print">
     <div class="menu">
       <li>
         <a href="<?= $url; ?>admin/dashboard/medical-records" class="back">Kembali</a>
       </li>
       <li>
         <button id="printButton" onclick="print()">Download PDF</button>
       </li>
     </div>

     <div class="container-paper" id="printMedicalRecords">

       <!-- letterhead -->
       <div class="letterhead">
         <table cellspacing="0" cellpadding="pixels">
           <tr>
             <td rowspan="3">
               <img src="<?= $url; ?>assets/img/logo/Logo_Kabupaten_Bone_Bolango.jpg" alt="" class="left-logo">
             </td>
             <td class="text-1">DINAS KESEHATAN KABUPATEN BONE BOLANGO</td>
             <td rowspan="3">
               <img src="<?= $logo; ?>" alt="" class="right-logo">
             </td>
           </tr>
           <tr>
             <td class="text-2">
               PUSKESMAS SUWAWA
             </td>
           </tr>
           <tr>
             <td class="text-3">Jl. Nani Wartabone No. 122 Desa Boludawa Kode Pos 96562</td>
           </tr>
         </table>

         <div class="border-letterhead-1"></div>
         <div class="border-letterhead-2"></div>
       </div>

       <!-- data 1 -->
       <?php foreach ($patients as $rowPatients) : ?>
         <?php if ($rowPatients["no_rekam_medis"] === base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["no_rekam_medis"])))))))))) : ?>
           <div class="data-1">
             <table cellspacing="0" class="table-data-1-left">
               <tr>
                 <td>No. Rekam Medis</td>
                 <td>: <?= $rowPatients["no_rekam_medis"]; ?></td>
               </tr>
               <tr>
                 <td>No. Kartu Jaminan</td>
                 <td>:
                   <?php if (empty($rowPatients["no_kartu_jaminan"])) : ?>
                     -
                   <?php endif; ?>
                   <?php if (!empty($rowPatients["no_kartu_jaminan"])) : ?>
                     <?= $rowPatients["no_kartu_jaminan"]; ?>
                   <?php endif; ?>
                 </td>
               </tr>
               <tr>
                 <td>Nama Pasien</td>
                 <td>: <?= $rowPatients["nama_pasien"]; ?></td>
               </tr>
               <tr>
                 <td>Jenis Kelamin</td>
                 <td>: <?= $rowPatients["jenis_kelamin"]; ?></td>
               </tr>
               <tr>
                 <td>Nama KK</td>
                 <td>:
                   <?php if (empty($rowPatients["nama_kk"])) : ?>
                     -
                   <?php endif; ?>
                   <?php if (!empty($rowPatients["nama_kk"])) : ?>
                     <?= $rowPatients["nama_kk"]; ?>
                   <?php endif; ?>
                 </td>
               </tr>
               <tr>
                 <td>Tempat Tgl Lahir/Umur</td>
                 <td>: <?= $rowPatients["tempat_lahir"]; ?>, <?= date_id($rowPatients["tgl_lahir"]); ?> / <?= date("Y") - substr($rowPatients["tgl_lahir"], 0, 4); ?></td>
               </tr>
             </table>

             <table cellspacing="0" class="table-data-1-right">
               <tr>
                 <td>Pendidikan</td>
                 <td>:
                   <?php if (empty($rowPatients["pendidikan"])) : ?>
                     -
                   <?php endif; ?>
                   <?php if (!empty($rowPatients["pendidikan"])) : ?>
                     <?= $rowPatients["pendidikan"]; ?>
                   <?php endif; ?>
                 </td>
               </tr>
               <tr>
                 <td>Pekerjaan</td>
                 <td>:
                   <?php if (empty($rowPatients["pekerjaan"])) : ?>
                     -
                   <?php endif; ?>
                   <?php if (!empty($rowPatients["pekerjaan"])) : ?>
                     <?= $rowPatients["pekerjaan"]; ?>
                   <?php endif; ?>
                 </td>
               </tr>
               <tr>
                 <td>No. Hp</td>
                 <td>:
                   <?php if (empty($rowPatients["no_hp"])) : ?>
                     -
                   <?php endif; ?>
                   <?php if (!empty($rowPatients["no_hp"])) : ?>
                     <?= $rowPatients["no_hp"]; ?>
                   <?php endif; ?>
                 </td>
               </tr>
               <tr>
                 <td>Agama</td>
                 <td>: <?= $rowPatients["agama"]; ?></td>
               </tr>
               <tr>
                 <td>Alamat</td>
                 <td>: <?= $rowPatients["alamat"]; ?></td>
               </tr>
               <tr>
                 <td>Riwayat Alergi</td>
                 <td>:
                   <?php if (empty($rowPatients["riwayat_alergi"])) : ?>
                     -
                   <?php endif; ?>
                   <?php if (!empty($rowPatients["riwayat_alergi"])) : ?>
                     <?= $rowPatients["riwayat_alergi"]; ?>
                   <?php endif; ?>
                 </td>
               </tr>
             </table>
           </div>
         <?php endif; ?>
       <?php endforeach; ?>

       <!-- data 2 -->
       <div class="data-2">
         <table border="1" cellspacing="0">
           <thead>
             <tr>
               <th>NO</th>
               <th>HARI / TANGGAL</th>
               <th>MEDIS</th>
               <th>PARAMEDIS</th>
               <th>KETERANGAN</th>
             </tr>
           </thead>
           <tbody>
             <?php $idTable = 1; ?>
             <?php foreach ($medicalRecords as $rowMedicalRecords) : ?>
               <?php if (base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["no_rekam_medis"]))))))))) === $rowMedicalRecords["no_rekam_medis"]) : ?>
                 <tr>
                   <td><?= $idTable; ?></td>
                   <td>
                     <?php if (date("l", strtotime($rowMedicalRecords["tgl"])) === "Sunday") : ?>
                       Minggu,
                     <?php endif; ?>

                     <?php if (date("l", strtotime($rowMedicalRecords["tgl"])) === "Monday") : ?>
                       Senin,
                     <?php endif; ?>

                     <?php if (date("l", strtotime($rowMedicalRecords["tgl"])) === "Tuesday") : ?>
                       Selasa,
                     <?php endif; ?>

                     <?php if (date("l", strtotime($rowMedicalRecords["tgl"])) === "Wednesday") : ?>
                       Rabu,
                     <?php endif; ?>

                     <?php if (date("l", strtotime($rowMedicalRecords["tgl"])) === "Thursday") : ?>
                       Kamis,
                     <?php endif; ?>

                     <?php if (date("l", strtotime($rowMedicalRecords["tgl"])) === "Friday") : ?>
                       Jumat,
                     <?php endif; ?>

                     <?php if (date("l", strtotime($rowMedicalRecords["tgl"])) === "Saturday") : ?>
                       Sabtu,
                     <?php endif; ?>

                     <?= date_id($rowMedicalRecords["tgl"]); ?>
                   </td>
                   <td><?= $rowMedicalRecords["medis"]; ?></td>
                   <td><?= $rowMedicalRecords["paramedis"]; ?></td>
                   <td><?= $rowMedicalRecords["keterangan"]; ?></td>
                 </tr>
                 <?php $idTable++; ?>
               <?php endif; ?>
             <?php endforeach; ?>
           </tbody>
         </table>
       </div>

     </div>
   </section>
   <!-- ====================================
     end TEMPLATE MEDICAL RECORDS PRINT 
     ===================================-->
 <?php endif; ?>




 <?php if ($_GET["print"] === "card-control") : ?>
   <!-- ====================================
       TEMPLATE MEDICAL CARD CONTROL
       ===================================-->
   <section class="medical-records-print card-control-print">
     <div class="menu">
       <li>
         <a href="<?= $url; ?>admin/dashboard/medical-records" class="back">Kembali</a>
       </li>
       <li>
         <button id="printButton" onclick="print()">Download PDF</button>
       </li>
     </div>

     <div class="container-paper" id="printCardControl">

       <div class="paper-card-control">
         <div class="border-paper-card-control">
           <!-- letterhead -->
           <div class="letterhead">
             <table cellspacing="0" cellpadding="pixels">
               <tr>
                 <td rowspan="3">
                   <img src="<?= $logo; ?>" alt="" class="left-logo">
                 </td>
                 <td class="text-1">DINAS KESEHATAN KABUPATEN BONE BOLANGO</td>
                 <td rowspan="3">
                   <img src="<?= $url; ?>assets/img/logo/bg-white.png" alt="" class="right-logo">
                 </td>
               </tr>
               <tr>
                 <td class="text-2">
                   PUSKESMAS SUWAWA
                 </td>
               </tr>
               <tr>
                 <td class="text-3">Jl. Nani Wartabone No. 122 Desa Boludawa Kode Pos 96562</td>
               </tr>
             </table>

             <div class="border-letterhead-3"></div>
             <div class="border-letterhead-1"></div>
             <div class="border-letterhead-2"></div>
           </div>

           <!-- data 1 -->
           <?php foreach ($patients as $rowPatients) : ?>
             <?php if ($rowPatients["no_rekam_medis"] === base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["no_rekam_medis"])))))))))) : ?>
               <div class="data-1">
                 <h4>No. RM</h4>
                 <li><?= substr($rowPatients["no_rekam_medis"], 0, 1); ?></li>
                 <li><?= substr($rowPatients["no_rekam_medis"], 1, 1); ?></li>
                 <li><?= substr($rowPatients["no_rekam_medis"], 2, 1); ?></li>
                 <li><?= substr($rowPatients["no_rekam_medis"], 3, 1); ?></li>
                 <li><?= substr($rowPatients["no_rekam_medis"], 4, 1); ?></li>
                 <li><?= substr($rowPatients["no_rekam_medis"], 5, 1); ?></li>
               </div>
             <?php endif; ?>
           <?php endforeach; ?>

           <!-- data 2 -->
           <?php foreach ($patients as $rowPatients) : ?>
             <?php if ($rowPatients["no_rekam_medis"] === base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["no_rekam_medis"])))))))))) : ?>
               <div class="data-2">
                 <table>
                   <tr>
                     <td class="label-card-control">Nama</td>
                     <td>: <?= $rowPatients["nama_pasien"]; ?></td>
                   </tr>
                   <tr>
                     <td class="label-card-control">Tgl Lahir</td>
                     <td>: <?= date_id($rowPatients["tgl_lahir"]); ?></td>
                   </tr>
                   <tr>
                     <td class="label-card-control">Umur</td>
                     <td>:
                       <?= date("Y") - substr($rowPatients["tgl_lahir"], 0, 4); ?> Tahun
                     </td>
                   </tr>
                   <tr>
                     <td class="label-card-control">Pekerjaan</td>
                     <td>: <?= $rowPatients["pekerjaan"]; ?></td>
                   </tr>
                   <tr>
                     <td class="label-card-control">Pendidikan</td>
                     <td>: <?= $rowPatients["pendidikan"]; ?></td>
                   </tr>
                   <tr>
                     <td class="label-card-control">Alamat</td>
                     <td>: <?= $rowPatients["alamat"]; ?></td>
                   </tr>
                 </table>
               </div>
             <?php endif; ?>
           <?php endforeach; ?>
         </div>
       </div>

     </div>
   </section>
   <!-- ====================================
     end TEMPLATE MEDICAL RECORDS PRINT 
     ===================================-->
 <?php endif; ?>