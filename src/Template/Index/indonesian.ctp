<?php if(isset($surveyCompleted)) { ?>
<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
  <strong>Great!</strong> Your response have been submitted successfully. Thank you for spending time to do the survey.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<form method="post" id="surveyForm">
    <h4 class="text-center mt-3">
        Gaya Pembelajaran Pilihan Generasi Muda dalam Budaya dan Generasi yang Berbeda
    </h4>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Peserta yang Terhormat,</h5>
            <p class="card-text">
                Survei ini dilakukan untuk mendapatkan pendapat Anda tentang gaya belajar yang disukai. Telah diketahui bahwa informasi tentang preferensi belajar sendiri sangat membantu dalam membuat studi Anda lebih menyenangkan, memuaskan, dan akan menghasilkan pembelajaran yang lebih baik.
            </p>
            <p class="card-text">
                Kuisioner ini dibagi menjadi 2 bagian. Bagian A mencakup informasi demografis dan Bagian B adalah gaya pembelajaran pilihan generasi muda.
            </p>
            <p class="card-text">
                Tanggapi dengan baik dengan mencentang kotak yang sesuai atau dengan mengisi jawaban Anda di ruang kosong yang disediakan. Semua informasi yang dikumpulkan dari responden akan diperlakukan dengan kerahasiaan yang ketat. 
            </p>
        </div>
    </div>
    <hr class="mt-4 mb-4"/>
    <h3>
        Bagian A:
        <small class="text-primary">Demografi</small>
    </h3>
    <div class="card">
        <div class="card-header">
            <span class="text-primary">1.</span> Kebangsaan (Contoh: Malaysia, Chinese, Indonesia, Dll)
        </div>
        <div class="card-body">
            <div class="form-group">
                <input type="text" name="Nationality" class="form-control" data-sanitize="trim upper" placeholder="Enter Answer" data-validation="required">
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">2.</span> Etnik / Ras
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Ethnicity_Race1" name="Ethnicity_Race" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Ethnicity_Race1">Chinese</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Ethnicity_Race2" name="Ethnicity_Race" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Ethnicity_Race2">Indian</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Ethnicity_Race3" name="Ethnicity_Race" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Ethnicity_Race3">Malay</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Ethnicity_Race4" name="Ethnicity_Race" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Ethnicity_Race4">Asia lainnya</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Ethnicity_Race5" name="Ethnicity_Race" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Ethnicity_Race5">Kaukasia / Eropa</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Ethnicity_Race6" name="Ethnicity_Race" class="custom-control-input" value="6">
                    <label class="custom-control-label" for="Ethnicity_Race6">Lainnya</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Ethnicity_Race_Other" class="form-control" placeholder="Mohon Sebutkan" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">3.</span> Jenis Kelamin
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Gender1" name="Gender" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Gender1">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Gender2" name="Gender" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Gender2">Perempuan</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">4.</span> Tahun Lahir
        </div>
        <div class="card-body">
            <div class="form-group">
                <select class="form-control" name="Birthyear" data-validation="required">
                    <option value="">Select Year</option>
                </select>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">5.</span> Nama Lembaga Pendidikan yang saat ini dan Negara
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label for="Institution" class="col-sm-2 col-form-label">Lembaga Pendidikan</label>
                <div class="col-sm-10">
                    <input type="text" name="Institution" class="form-control" id="Institution" placeholder="Enter Answer" data-validation="required" data-sanitize="trim upper">
                </div>
            </div>
            <div class="form-group row">
                <label for="Country" class="col-sm-2 col-form-label">Negara</label>
                <div class="col-sm-10">
                    <input type="text" name="Country" class="form-control" id="Country" placeholder="Enter Answer" data-validation="required" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">6.</span> Jenis Pembelajaran
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Modeofstudy1" name="Modeofstudy" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Modeofstudy1">Full time</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Modeofstudy2" name="Modeofstudy" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Modeofstudy2">Paruh waktu</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">7.</span> Tipe Lembaga Pendidikan
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Institutiontype1" name="Institutiontype" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Institutiontype1">Sekolah Menengah Atas (SMA)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Institutiontype2" name="Institutiontype" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Institutiontype2">Sekolah Menengah Kejuruan (SMK)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Institutiontype3" name="Institutiontype" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Institutiontype3">Politeknik</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Institutiontype4" name="Institutiontype" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Institutiontype4">perguruan tinggi / universitas</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Institutiontype5" name="Institutiontype" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Institutiontype5">Universitas</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Institutiontype6" name="Institutiontype" class="custom-control-input" value="6">
                    <label class="custom-control-label" for="Institutiontype6">Lainnya</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Institutiontype_Other" class="form-control" placeholder="Mohon Sebutkan" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">8.</span> Tingkat Pendidikan saat ini
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation1" name="Levelofeducation" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Levelofeducation1">SMA</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation2" name="Levelofeducation" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Levelofeducation2">Foundation</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation3" name="Levelofeducation" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Levelofeducation3">D3</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation4" name="Levelofeducation" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Levelofeducation4">S1</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation5" name="Levelofeducation" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Levelofeducation5">S2</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation6" name="Levelofeducation" class="custom-control-input" value="6">
                    <label class="custom-control-label" for="Levelofeducation6">S3</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation7" name="Levelofeducation" class="custom-control-input" value="7">
                    <label class="custom-control-label" for="Levelofeducation7">Lainnya</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Levelofeducation_Other" class="form-control" placeholder="Mohon Sebutkan" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">9.</span> Program yang dipelajari saat ini / Program yang akan dipelajari
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme1" name="Programme" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Programme1">Sastra (Contoh: Bahasa, Filsafat, Sejarah, pelajaran agama)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme2" name="Programme" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Programme2">Ilmu Fisika (Contohnya Fisika, Kimia)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme3" name="Programme" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Programme3">Pertanian, Ilmu biologi / Kehidupan ( Biologi, Biokimia, Botani, dll)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme4" name="Programme" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Programme4">Seni dan desain (Contoh: seni rupa, seni drama, music, animasi, grafik design)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme5" name="Programme" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Programme5">Ilmu Kemasyarakatan (Contoh: Ilmu politik, sosiologi, psikologi)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme6" name="Programme" class="custom-control-input" value="6">
                    <label class="custom-control-label" for="Programme6">Matematika / Statistika / Aktuaris</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme7" name="Programme" class="custom-control-input" value="7">
                    <label class="custom-control-label" for="Programme7">Komunikasi / Jurnalis / Studi Media</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme8" name="Programme" class="custom-control-input" value="8">
                    <label class="custom-control-label" for="Programme8">Teknik Mesin</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme9" name="Programme" class="custom-control-input" value="9">
                    <label class="custom-control-label" for="Programme9">Arsitektur</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme10" name="Programme" class="custom-control-input" value="10">
                    <label class="custom-control-label" for="Programme10">Studi lingkungan (Contoh: geografi, studi perkotaan)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme11" name="Programme" class="custom-control-input" value="11">
                    <label class="custom-control-label" for="Programme11">Bisnis (Contoh: Ekonomi, Marketing, Perdagangan, Akutansi)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme12" name="Programme" class="custom-control-input" value="12">
                    <label class="custom-control-label" for="Programme12">Hospitality / Pariwisata / Kuliner</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme13" name="Programme" class="custom-control-input" value="13">
                    <label class="custom-control-label" for="Programme13">Ilmu Kesehatan (Contoh: Obat-Obatan, fisioterapi) / Perawat</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme14" name="Programme" class="custom-control-input" value="14">
                    <label class="custom-control-label" for="Programme14">Ilmu Komputer / Teknologi Informasi</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme15" name="Programme" class="custom-control-input" value="15">
                    <label class="custom-control-label" for="Programme15">Pendidikan</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme16" name="Programme" class="custom-control-input" value="16">
                    <label class="custom-control-label" for="Programme16">Kesejahteraan Sosial / Penegakan hukum</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme17" name="Programme" class="custom-control-input" value="17">
                    <label class="custom-control-label" for="Programme17">Lainnya</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Programme_Other" class="form-control" placeholder="Mohon Sebutkan" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">10.</span> Bahasa yang digunakan untuk mengajar disekolah
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Language1" name="Language" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Language1">English</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Language2" name="Language" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Language2">Bahasa Melayu</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Language3" name="Language" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Language3">Mandarin</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Language4" name="Language" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Language4">Bahasa Indonesia</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Language5" name="Language" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Language5">Lainnya</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Language_Other" class="form-control" placeholder="Mohon Sebutkan" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">11.</span> Bahasa Pertama
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Firstlanguage1" name="Firstlanguage" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Firstlanguage1">English</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Firstlanguage2" name="Firstlanguage" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Firstlanguage2">Bahasa Melayu</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Firstlanguage3" name="Firstlanguage" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Firstlanguage3">Mandarin</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Firstlanguage4" name="Firstlanguage" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Firstlanguage4">Bahasa Indonesia</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Firstlanguage5" name="Firstlanguage" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Firstlanguage5">Lainnya</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Firstlanguage_Other" class="form-control" placeholder="Mohon Sebutkan" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">12.</span> Apa yang akan kamu lakukan setelah tamat?
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan1" name="Plan" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Plan1">Melanjutkan Studi</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan2" name="Plan" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Plan2">Bekerja</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan3" name="Plan" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Plan3">Studi dan kerja Part time</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan4" name="Plan" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Plan4">Bergabung dengan bisnis keluarga</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan5" name="Plan" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Plan5">Memulai Bisnis sendiri</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan6" name="Plan" class="custom-control-input" value="6">
                    <label class="custom-control-label" for="Plan6">Belum ditentukan</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan7" name="Plan" class="custom-control-input" value="7">
                    <label class="custom-control-label" for="Plan7">Lainnya</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Plan_Other" class="form-control" placeholder="Mohon Sebutkan" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">13.</span> Siapa di antara yang berikut telah memengaruhi rencana masa depan Anda: (dapat memilih lebih dari satu opsi)
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_Institution" name="Influence[]" value="Institution" data-validation="checkbox_group" data-validation-qty="min1"/>
                    <label class="custom-control-label" for="Influence_Institution">Universitas</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_Teachers" name="Influence[]" value="Teachers"/>
                    <label class="custom-control-label" for="Influence_Teachers">Guru / Dosen</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_Jobmarket" name="Influence[]" value="Jobmarket"/>
                    <label class="custom-control-label" for="Influence_Jobmarket">Lowongan Kerja</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_Family" name="Influence[]" value="Family"/>
                    <label class="custom-control-label" for="Influence_Family">Keluarga</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_IndependentSelf" name="Influence[]" value="IndependentSelf"/>
                    <label class="custom-control-label" for="Influence_IndependentSelf">Diri Sendiri</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_friends" name="Influence[]" value="friends"/>
                    <label class="custom-control-label" for="Influence_friends">Teman-Teman</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_Media" name="Influence[]" value="Media"/>
                    <label class="custom-control-label" for="Influence_Media">Media</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_CareerExhibition" name="Influence[]" value="CareerExhibition"/>
                    <label class="custom-control-label" for="Influence_CareerExhibition">Pameran Pendidikan</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_Other" name="Influence[]" value="Other"/>
                    <label class="custom-control-label" for="Influence_Other">Lainnya</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Influence_Other_Specify" class="form-control" placeholder="Mohon Sebutkan" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">14.</span> Saya ingin mendapatkan bimbingan dari instruktur selama (dapat memilih lebih dari satu opsi)
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Guidance_classtime" name="Guidance[]" value="classtime" data-validation="checkbox_group" data-validation-qty="min1"/>
                    <label class="custom-control-label" for="Guidance_classtime">Waktu kelas</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Guidance_outsideclass" name="Guidance[]" value="outsideclass"/>
                    <label class="custom-control-label" for="Guidance_outsideclass">Diluar Jam kelas</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Guidance_duringbreaktime" name="Guidance[]" value="duringbreaktime"/>
                    <label class="custom-control-label" for="Guidance_duringbreaktime">Saat Istirahat</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Guidance_Viaemail" name="Guidance[]" value="Viaemail"/>
                    <label class="custom-control-label" for="Guidance_Viaemail">Melaluiu</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Guidance_Socialmedia" name="Guidance[]" value="Socialmedia"/>
                    <label class="custom-control-label" for="Guidance_Socialmedia">Social media (WhatsApp, WeChat, etc.)</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">15.</span> Pada usia berapa Anda memiliki ponsel pertama anda?
        </div>
        <div class="card-body">
            <div class="form-group">
                <input type="number" name="Age_phone" class="form-control" placeholder="Enter Answer" data-validation="number" data-validation-allowing="range[1;60]" data-validation-error-msg="Please enter a valid age">
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">16.</span> Pada usia berapa Anda mulai memiliki akses penuh ke data seluler?
        </div>
        <div class="card-body">
            <div class="form-group">
                <input type="number" name="Age_mobiledata" class="form-control" placeholder="Enter Answer" data-validation="number" data-validation-allowing="range[1;60]" data-validation-error-msg="Please enter a valid age">
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">17.</span> Berapa usia Anda ketika Anda pertama kali memiliki akses Wi-Fi di rumah Anda sendiri?
        </div>
        <div class="card-body">
            <div class="form-group">
                <input type="number" name="Age_Wifi" class="form-control" placeholder="Enter Answer" data-validation="number" data-validation-allowing="range[1;60]" data-validation-error-msg="Please enter a valid age">
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">18.</span> Seberapa sering Anda menggunakan internet untuk (Tolong √ mana yang berlaku)
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="text-center">Setiap hari</th>
                        <th scope="col" class="text-center">Lebih dari sekali sehari</th>
                        <th scope="col" class="text-center">Seminggu Sekali</th>
                        <th scope="col" class="text-center">Sebulan sekali</th>
                        <th scope="col" class="text-center">Kurang dari sebulan sekali</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Hiburan (Youtube, Nonton Film, gaming…etc)</th>
                        <td class="text-center">
                            <input type="hidden" name="Frequent_Entertainment" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Entertainment1" name="Frequent_Entertainment" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="Frequent_Entertainment1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Entertainment2" name="Frequent_Entertainment" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="Frequent_Entertainment2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Entertainment3" name="Frequent_Entertainment" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="Frequent_Entertainment3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Entertainment4" name="Frequent_Entertainment" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="Frequent_Entertainment4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Entertainment5" name="Frequent_Entertainment" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="Frequent_Entertainment5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Sekolah, Belajar, dan mengerjakan Pekerjaan Rumah (PR)</th>
                        <td class="text-center">
                            <input type="hidden" name="Frequent_Education" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Education1" name="Frequent_Education" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="Frequent_Education1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Education2" name="Frequent_Education" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="Frequent_Education2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Education3" name="Frequent_Education" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="Frequent_Education3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Education4" name="Frequent_Education" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="Frequent_Education4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Education5" name="Frequent_Education" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="Frequent_Education5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Tetap Berhubungan dengan Keluarga dan teman</th>
                        <td class="text-center">
                            <input type="hidden" name="Frequent_Keepintouch" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Keepintouch1" name="Frequent_Keepintouch" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="Frequent_Keepintouch1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Keepintouch2" name="Frequent_Keepintouch" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="Frequent_Keepintouch2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Keepintouch3" name="Frequent_Keepintouch" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="Frequent_Keepintouch3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Keepintouch4" name="Frequent_Keepintouch" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="Frequent_Keepintouch4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Keepintouch5" name="Frequent_Keepintouch" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="Frequent_Keepintouch5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Berita</th>
                        <td class="text-center">
                            <input type="hidden" name="Frequent_news" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_news1" name="Frequent_news" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="Frequent_news1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_news2" name="Frequent_news" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="Frequent_news2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_news3" name="Frequent_news" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="Frequent_news3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_news4" name="Frequent_news" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="Frequent_news4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_news5" name="Frequent_news" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="Frequent_news5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Tujuan Lainnya</th>
                        <td class="text-center">
                            <input type="hidden" name="Frequent_otherpurpose" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_otherpurpose1" name="Frequent_otherpurpose" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="Frequent_otherpurpose1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_otherpurpose2" name="Frequent_otherpurpose" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="Frequent_otherpurpose2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_otherpurpose3" name="Frequent_otherpurpose" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="Frequent_otherpurpose3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_otherpurpose4" name="Frequent_otherpurpose" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="Frequent_otherpurpose4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_otherpurpose5" name="Frequent_otherpurpose" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="Frequent_otherpurpose5"></label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">19.</span> Silakan pilih 3 situs Social Media yang sering Anda gunakan
        </div>
        <div class="card-body">
            <div class="form-group limit-selection" data-max-allowed="3">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Facebook" name="Socialmedia_sites[]" value="Facebook" data-validation="checkbox_group" data-validation-qty="3-3" data-validation-error-msg="Please choose 3 items"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Facebook">Facebook</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Youtube" name="Socialmedia_sites[]" value="Youtube"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Youtube">Youtube</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Instagram" name="Socialmedia_sites[]" value="Instagram"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Instagram">Instagram</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Qzone" name="Socialmedia_sites[]" value="Qzone"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Qzone">Qzone</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_weibo" name="Socialmedia_sites[]" value="weibo"/>
                    <label class="custom-control-label" for="Socialmedia_sites_weibo">Weibo</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Twitter" name="Socialmedia_sites[]" value="Twitter"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Twitter">Twitter</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_reddit" name="Socialmedia_sites[]" value="reddit"/>
                    <label class="custom-control-label" for="Socialmedia_sites_reddit">Reddit</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Pinterest" name="Socialmedia_sites[]" value="Pinterest"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Pinterest">Pinterest</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Ask_fm" name="Socialmedia_sites[]" value="Ask_fm"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Ask_fm">Ask.fm</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Tumblr" name="Socialmedia_sites[]" value="Tumblr"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Tumblr">Tumblr</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Flickr" name="Socialmedia_sites[]" value="Flickr"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Flickr">Flickr</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Google" name="Socialmedia_sites[]" value="Google"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Google">Google+</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">20.</span> Silakan pilih 3 Aplikasi Media Sosial yang sering Anda gunakan
        </div>
        <div class="card-body">
            <div class="form-group limit-selection" data-max-allowed="3">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_app_Whatsapp" name="Socialmedia_app[]" value="Whatsapp" data-validation="checkbox_group" data-validation-qty="3-3" data-validation-error-msg="Please choose 3 items"/>
                    <label class="custom-control-label" for="Socialmedia_app_Whatsapp">WhatsApp</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_app_Messenger" name="Socialmedia_app[]" value="Messenger"/>
                    <label class="custom-control-label" for="Socialmedia_app_Messenger">Messenger</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_app_WeChat" name="Socialmedia_app[]" value="WeChat"/>
                    <label class="custom-control-label" for="Socialmedia_app_WeChat">WeChat</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_app_Instagram" name="Socialmedia_app[]" value="Instagram"/>
                    <label class="custom-control-label" for="Socialmedia_app_Instagram">Instagram</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_app_Qzone" name="Socialmedia_app[]" value="Qzone"/>
                    <label class="custom-control-label" for="Socialmedia_app_Qzone">Qzone</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_app_Viber" name="Socialmedia_app[]" value="Viber"/>
                    <label class="custom-control-label" for="Socialmedia_app_Viber">Viber</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_app_LINE" name="Socialmedia_app[]" value="LINE"/>
                    <label class="custom-control-label" for="Socialmedia_app_LINE">LINE</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_app_Snapchat" name="Socialmedia_app[]" value="Snapchat"/>
                    <label class="custom-control-label" for="Socialmedia_app_Snapchat">Snapchat</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_app_YY" name="Socialmedia_app[]" value="YY"/>
                    <label class="custom-control-label" for="Socialmedia_app_YY">YY</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">21.</span> Saya belajar secara efektif ketika saya, (Tolong √ mana yang berlaku)
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="text-center">Sangat Tidak Setuju</th>
                        <th scope="col" class="text-center">Tidak Setuju</th>
                        <th scope="col" class="text-center">Netral</th>
                        <th scope="col" class="text-center">Netral</th>
                        <th scope="col" class="text-center">Sangat Setuju</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Belajar Mandiri</th>
                        <td class="text-center">
                            <input type="hidden" name="studyindependent" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="studyindependent1" name="studyindependent" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="studyindependent1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="studyindependent2" name="studyindependent" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="studyindependent2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="studyindependent3" name="studyindependent" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="studyindependent3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="studyindependent4" name="studyindependent" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="studyindependent4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="studyindependent5" name="studyindependent" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="studyindependent5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Bertukar pikiran dengan sekelompok teman </th>
                        <td class="text-center">
                            <input type="hidden" name="brainstorm" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="brainstorm1" name="brainstorm" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="brainstorm1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="brainstorm2" name="brainstorm" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="brainstorm2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="brainstorm3" name="brainstorm" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="brainstorm3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="brainstorm4" name="brainstorm" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="brainstorm4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="brainstorm5" name="brainstorm" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="brainstorm5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Ikuti Petunjuk dari Instruktur / Guru</th>
                        <td class="text-center">
                            <input type="hidden" name="direction" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="direction1" name="direction" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="direction1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="direction2" name="direction" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="direction2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="direction3" name="direction" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="direction3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="direction4" name="direction" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="direction4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="direction5" name="direction" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="direction5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Dapatkan bahan dalam bentuk digital / Online</th>
                        <td class="text-center">
                            <input type="hidden" name="material_digital" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="material_digital1" name="material_digital" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="material_digital1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="material_digital2" name="material_digital" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="material_digital2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="material_digital3" name="material_digital" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="material_digital3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="material_digital4" name="material_digital" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="material_digital4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="material_digital5" name="material_digital" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="material_digital5"></label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">22.</span> Saya bisa belajar lebih baik jika saya, (Tolong √ mana yang berlaku)
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="text-center">Sangat Tidak Setuju</th>
                        <th scope="col" class="text-center">Tidak Setuju</th>
                        <th scope="col" class="text-center">Netral</th>
                        <th scope="col" class="text-center">Setuju</th>
                        <th scope="col" class="text-center">Sangat Setuju</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Menghapal fakta</th>
                        <td class="text-center">
                            <input type="hidden" name="memorizefact" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="memorizefact1" name="memorizefact" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="memorizefact1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="memorizefact2" name="memorizefact" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="memorizefact2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="memorizefact3" name="memorizefact" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="memorizefact3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="memorizefact4" name="memorizefact" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="memorizefact4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="memorizefact5" name="memorizefact" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="memorizefact5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Mengingat semua yang diberikan</th>
                        <td class="text-center">
                            <input type="hidden" name="visualize" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="visualize1" name="visualize" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="visualize1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="visualize2" name="visualize" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="visualize2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="visualize3" name="visualize" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="visualize3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="visualize4" name="visualize" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="visualize4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="visualize5" name="visualize" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="visualize5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Membuat catatan pendek atau pertanyaan singkat</th>
                        <td class="text-center">
                            <input type="hidden" name="shortnote" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="shortnote1" name="shortnote" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="shortnote1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="shortnote2" name="shortnote" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="shortnote2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="shortnote3" name="shortnote" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="shortnote3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="shortnote4" name="shortnote" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="shortnote4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="shortnote5" name="shortnote" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="shortnote5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Diskusi topik dengan Teman- teman</th>
                        <td class="text-center">
                            <input type="hidden" name="discuss_friends" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="discuss_friends1" name="discuss_friends" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="discuss_friends1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="discuss_friends2" name="discuss_friends" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="discuss_friends2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="discuss_friends3" name="discuss_friends" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="discuss_friends3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="discuss_friends4" name="discuss_friends" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="discuss_friends4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="discuss_friends5" name="discuss_friends" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="discuss_friends5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Mencari dari berbagai sumber seperti bacaan, dan diskusi</th>
                        <td class="text-center">
                            <input type="hidden" name="differentsource" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="differentsource1" name="differentsource" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="differentsource1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="differentsource2" name="differentsource" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="differentsource2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="differentsource3" name="differentsource" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="differentsource3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="differentsource4" name="differentsource" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="differentsource4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="differentsource5" name="differentsource" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="differentsource5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Menuliskan semua sebagai catatan ketika jam belajar</th>
                        <td class="text-center">
                            <input type="hidden" name="writedown" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="writedown1" name="writedown" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="writedown1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="writedown2" name="writedown" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="writedown2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="writedown3" name="writedown" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="writedown3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="writedown4" name="writedown" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="writedown4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="writedown5" name="writedown" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="writedown5"></label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">23.</span> Menurut saya, (Harap √ mana yang berlaku)
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="text-center">Sangat Tidak Setuju</th>
                        <th scope="col" class="text-center">Tidak Setuju</th>
                        <th scope="col" class="text-center">Netral</th>
                        <th scope="col" class="text-center">Setuju</th>
                        <th scope="col" class="text-center">Sangat Setuju</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Belajar adalah tanggung jawab sendiri</th>
                        <td class="text-center">
                            <input type="hidden" name="ownresponsibility" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="ownresponsibility1" name="ownresponsibility" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="ownresponsibility1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="ownresponsibility2" name="ownresponsibility" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="ownresponsibility2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="ownresponsibility3" name="ownresponsibility" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="ownresponsibility3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="ownresponsibility4" name="ownresponsibility" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="ownresponsibility4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="ownresponsibility5" name="ownresponsibility" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="ownresponsibility5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Guru / Pembimbing saya harus memotivasi saya dalam pembelajaran saya</th>
                        <td class="text-center">
                            <input type="hidden" name="motivation_instructor" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="motivation_instructor1" name="motivation_instructor" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="motivation_instructor1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="motivation_instructor2" name="motivation_instructor" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="motivation_instructor2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="motivation_instructor3" name="motivation_instructor" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="motivation_instructor3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="motivation_instructor4" name="motivation_instructor" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="motivation_instructor4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="motivation_instructor5" name="motivation_instructor" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="motivation_instructor5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Saya harus memiliki kepercayaan yang tinggi kepada guru / Pembimbing saya</th>
                        <td class="text-center">
                            <input type="hidden" name="trust_instructor" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="trust_instructor1" name="trust_instructor" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="trust_instructor1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="trust_instructor2" name="trust_instructor" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="trust_instructor2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="trust_instructor3" name="trust_instructor" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="trust_instructor3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="trust_instructor4" name="trust_instructor" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="trust_instructor4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="trust_instructor5" name="trust_instructor" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="trust_instructor5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Saya harus bergantung kepada teman-teman saya untuk mendapat bimbingan yang lebih</th>
                        <td class="text-center">
                            <input type="hidden" name="guidance_friends" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="guidance_friends1" name="guidance_friends" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="guidance_friends1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="guidance_friends2" name="guidance_friends" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="guidance_friends2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="guidance_friends3" name="guidance_friends" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="guidance_friends3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="guidance_friends4" name="guidance_friends" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="guidance_friends4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="guidance_friends5" name="guidance_friends" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="guidance_friends5"></label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h3 class="mt-3">
        BAGIAN B:
        <small class="text-primary">BAGAIMANA SAYA PELAJARI DENGAN BAIK?</small>
    </h3>
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                Pilih jawaban yang paling menjelaskan preferensi Anda dan lingkari huruf di sampingnya. Anda hanya dapat memilih satu jawaban untuk setiap pertanyaan dan Anda harus menjawab setiap pertanyaan. Jika "a" dan "b" sepertinya berlaku untuk Anda, silakan pilih salah satu yang berlaku lebih sering.
            </p>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">1.</span> Saya memahami sesuatu yang lebih baik setelah saya
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q1_a" name="Q1" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q1_a">mencobanya</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q1_b" name="Q1" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q1_b">memikirkannya</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">2.</span> Saya lebih suka dianggap
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q2_a" name="Q2" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q2_a">Realistis</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q2_b" name="Q2" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q2_b">inovatif</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">3.</span> Ketika saya berpikir tentang apa yang saya lakukan kemarin, saya paling mungkin mendapatkan
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q3_a" name="Q3" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q3_a">sebuah gambaran</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q3_b" name="Q3" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q3_b">kata-kata</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">4.</span> Saya cenderung
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q4_a" name="Q4" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q4_a">memahami detail subjek tetapi mungkin tidak yakin tentang struktur keseluruhannya</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q4_b" name="Q4" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q4_b">memahami struktur keseluruhan tetapi mungkin tidak yakin tentang detail</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">5.</span> Ketika saya mempelajari sesuatu yang baru, itu membantu saya untuk
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q5_a" name="Q5" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q5_a">membicarakannya</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q5_b" name="Q5" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q5_b">memikirkannya</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">6.</span> Jika saya seorang guru, saya lebih suka mengajar mata pelajaran
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q6_a" name="Q6" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q6_a">yang berhubungan dengan fakta dan situasi kehidupan nyata</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q6_b" name="Q6" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q6_b">yang berhubungan dengan ide dan teori</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">7.</span> Saya lebih suka mendapatkan informasi baru melalui
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q7_a" name="Q7" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q7_a">Gambar, Diagram, Grafik, atau peta</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q7_b" name="Q7" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q7_b">petunjuk tertulis atau informasi lisan</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">8.</span> Begitu saya Mengerti
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q8_a" name="Q8" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q8_a">semua bagian, saya memahami semuanya</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q8_b" name="Q8" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q8_b">keseluruhannya, saya melihat bagaimana bagian-bagiannya yang sesuai</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">9.</span> Dalam kelompok belajar yang mengerjakan materi yang sulit, saya lebih suka untuk
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q9_a" name="Q9" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q9_a">ikut serta dan memberikan gagasan</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q9_b" name="Q9" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q9_b">duduk dan mendengarkan</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">10.</span> Saya merasa lebih mudah
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q10_a" name="Q10" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q10_a">dalam mempelajari fakta</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q10_b" name="Q10" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q10_b">dalam mempelajari konsep</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">11.</span> Dalam sebuah buku dengan banyak gambar dan grafik, saya cenderung
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q11_a" name="Q11" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q11_a">melihat gambar dan diagram dengan hati-hati</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q11_b" name="Q11" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q11_b">fokus pada teks tertulis</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">12.</span> Ketika saya memecahkan masalah matematika
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q12_a" name="Q12" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q12_a">saya biasanya bekerja dengan cara saya ke solusi satu langkah pada suatu waktu</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q12_b" name="Q12" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q12_b">Saya sering hanya melihat solusi tetapi kemudian harus berjuang untuk mencari tahu langkah-langkah untuk mendapatkan mereka</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">13.</span> Ketika dikelas
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q13_a" name="Q13" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q13_a">Saya harus mengenal banyak siswa</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q13_b" name="Q13" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q13_b">Saya tidak begitu mengenal banyak siswa</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">14.</span> Dalam membaca non-fiksi, saya lebih suka
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q14_a" name="Q14" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q14_a">sesuatu yang mengajarkan saya fakta-fakta baru atau memberi tahu saya bagaimana melakukan sesuatu</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q14_b" name="Q14" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q14_b">sesuatu yang memberi saya ide-ide baru untuk dipikirkan</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">15.</span> Saya suka tipe guru
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q15_a" name="Q15" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q15_a">yang menempatkan banyak diagram di papan tulis</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q15_b" name="Q15" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q15_b">yang menghabiskan banyak waktu untuk menjelaskan</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">16.</span> Ketika saya menganalisis sebuah cerita atau novel
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q16_a" name="Q16" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q16_a">saya memikirkan insiden-insiden itu dan mencoba menyusunnya untuk mencari tahu tema-tema</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q16_b" name="Q16" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q16_b">Saya hanya tahu apa tema-tema itu ketika saya selesai membaca dan kemudian saya harus kembali dan menemukan insiden yang mendemonstrasikannya</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">17.</span> Ketika saya memulai masalah pekerjaan rumah, saya lebih mungkin
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q17_a" name="Q17" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q17_a">mulai mengerjakan solusinya segera</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q17_b" name="Q17" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q17_b">mencoba untuk sepenuhnya memahami masalahnya terlebih dahulu</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">18.</span> Saya lebih suka ide dari
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q18_a" name="Q18" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q18_a">kepastian</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q18_b" name="Q18" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q18_b">teori</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">19.</span> Saya ingat yang terbaik 
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q19_a" name="Q19" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q19_a">apa yang saya lihat</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q19_b" name="Q19" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q19_b">apa yang saya dengar</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">20.</span> Lebih penting bagi saya bahwa seorang instruktur
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q20_a" name="Q20" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q20_a">menata materi dalam langkah-langkah sekuensial yang jelas</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q20_b" name="Q20" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q20_b">berikan saya gambaran keseluruhan dan mengkaitkan materi dengan subyek lain</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">21.</span> Saya lebih suka belajar
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q21_a" name="Q21" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q21_a">dalam kelompok</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q21_b" name="Q21" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q21_b">sendirian</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">22.</span> Saya lebih cenderung dipertimbangkan
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q22_a" name="Q22" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q22_a">berhati-hati tentang detail pekerjaan saya</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q22_b" name="Q22" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q22_b">kreatif tentang bagaimana melakukan pekerjaan saya</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">23.</span> Ketika saya mendapatkan arah ke tempat baru, saya lebih suka
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q23_a" name="Q23" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q23_a">peta</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q23_b" name="Q23" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q23_b">instruksi tertulis</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">24.</span> Saya belajar
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q24_a" name="Q24" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q24_a">pada kecepatan yang cukup teratur. Jika saya rajin belajar, saya akan "mengerti."</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q24_b" name="Q24" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q24_b">cocok dan dimulai. Saya akan benar-benar bingung dan kemudian tiba-tiba semuanya "sesuai" </label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">25.</span> Terlebih dahulu saya lebih suka
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q25_a" name="Q25" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q25_a">mencoba semuanya</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q25_b" name="Q25" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q25_b">memikirkan bagaimana saya akan melakukannya</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">26.</span> Ketika saya membaca untuk kesenangan, saya suka penulis untuk
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q26_a" name="Q26" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q26_a">dengan jelas mengatakan apa yang mereka maksud</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q26_b" name="Q26" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q26_b">mengatakan hal-hal dengan cara yang kreatif dan menarik</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">27.</span> Ketika saya melihat diagram atau sketsa di kelas, saya kemungkinan besar akan mengingat
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q27_a" name="Q27" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q27_a">gambar</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q27_b" name="Q27" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q27_b">apa yang dikatakan instruktur tentang hal itu</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">28.</span> Ketika mempertimbangkan informasi tubuh, saya lebih mungkin
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q28_a" name="Q28" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q28_a">fokus pada detail dan kehilangan gambaran besar</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q28_b" name="Q28" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q28_b">cobalah memahami gambaran besar sebelum masuk ke rinciannya</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">29.</span> Saya lebih mudah mengingat
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q29_a" name="Q29" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q29_a">sesuatu yang telah saya lakukan</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q29_b" name="Q29" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q29_b">sesuatu yang saya telah banyak pikirkan</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">30.</span> Ketika saya harus melakukan tugas, saya lebih suka
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q30_a" name="Q30" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q30_a">menguasai satu cara untuk melakukannya</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q30_b" name="Q30" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q30_b">datang dengan cara-cara baru untuk melakukannya</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">31.</span> Ketika seseorang menunjukkan saya data, saya lebih suka
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q31_a" name="Q31" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q31_a">bagan atau grafik</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q31_b" name="Q31" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q31_b">hasil peringkasan teks</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">32.</span> Saat menulis makalah, saya lebih memilih untuk
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q32_a" name="Q32" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q32_a">mengerjakan (memikirkan atau menulis) awal makalah dan maju ke depan</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q32_b" name="Q32" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q32_b">mengerjakan (memikirkan atau menulis) bagian-bagian kertas yang berbeda dan kemudian menyusunnya</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">33.</span> Ketika saya harus mengerjakan proyek kelompok, pertama-tama saya ingin is
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q33_a" name="Q33" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q33_a">memiliki "brainstorming kelompok" di mana semua orang menyumbangkan ide</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q33_b" name="Q33" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q33_b">brainstorming secara individual dan kemudian berkumpul bersama sebagai kelompok untuk membandingkan ide</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">34.</span> Saya menganggap pujian yang lebih tinggi untuk memanggil seseorang
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q34_a" name="Q34" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q34_a">masuk akal</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q34_b" name="Q34" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q34_b">imajinatif</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">35.</span> Ketika saya bertemu orang-orang di pesta, saya lebih suka untuk mengingat
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q35_a" name="Q35" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q35_a">seperti apa penampilan mereka</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q35_b" name="Q35" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q35_b">apa yang mereka katakan tentang diri mereka sendiri</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">36.</span> Ketika saya mempelajari subjek baru, saya lebih suka
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q36_a" name="Q36" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q36_a">tetap fokus pada subjek itu, belajar sebanyak mungkin tentang hal itu</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q36_b" name="Q36" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q36_b">mencoba membuat hubungan antara subjek itu dan subjek yang terkait</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">37.</span> Saya lebih suka dianggap
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q37_a" name="Q37" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q37_a">ramah</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q37_b" name="Q37" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q37_b">pendiam</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">38.</span> Saya lebih suka mata pelajaran yang menekankan pada
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q38_a" name="Q38" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q38_a"> materi konkrit (fakta, data)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q38_b" name="Q38" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q38_b"> materi abstrak (konsep, teori)</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">39.</span> Untuk hiburan, saya lebih suka
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q39_a" name="Q39" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q39_a">menonton televisi</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q39_b" name="Q39" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q39_b">membaca buku</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">40.</span> Beberapa guru memulai ceramah mereka dengan garis besar tentang apa yang akan mereka bahas. Garis besar seperti itu
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q40_a" name="Q40" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q40_a">agak membantu saya</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q40_b" name="Q40" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q40_b">sangat membantu saya</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">41.</span> Gagasan dari mengerjakan PR dalam kelompok, dengan memperoleh nilai yang sama untuk seluruh kelompok,
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q41_a" name="Q41" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q41_a">menarik bagi saya</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q41_b" name="Q41" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q41_b">tidak menarik bagi saya</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">42.</span> Ketika saya melakukan kalkulasi panjang,
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q42_a" name="Q42" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q42_a">saya cenderung mengulangi semua langkah-langkah saya dan memeriksa pekerjaan saya dengan hati-hati</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q42_b" name="Q42" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q42_b">Saya merasa memeriksa pekerjaan saya melelahkan dan harus memaksakan diri untuk melakukannya</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">43.</span> Saya cenderung menggambarkan tempat-tempat yang telah saya
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q43_a" name="Q43" class="custom-control-input"  value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q43_a">mudah dan cukup akurat</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q43_b" name="Q43" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q43_b">dengan kesulitan dan tanpa banyak detail</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">44.</span> Ketika memecahkan masalah dalam kelompok, saya akan lebih suka untuk
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q44_a" name="Q44" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q44_a">memikirkan langkah-langkah dalam proses solusi</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q44_b" name="Q44" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q44_b">memikirkan kemungkinan konsekuensi atau aplikasi dari solusi di berbagai bidang</label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4 offset-sm-4 mt-3 mb-3 text-center">
            <button type="submit" class="btn btn-primary btn-sm btn-block">Complete Survey</button>
            <small class="form-text text-muted">Terima kasih telah meluangkan waktu untuk melakukan survei</small>
    </div>
</form>

<script>
    $(document).ready(function() {
        // will first fade out the loading animation
        $("#status").fadeOut();
        // will fade out the whole DIV that covers the website.
        $("#preloader").delay(1000).fadeOut("slow");
    })
</script>