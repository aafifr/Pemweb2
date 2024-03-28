<?php
class Mahasiswa
{
    public $matkul;
    public $nilai;
    public $nim;

    public function __construct($matkul, $nilai, $nim)
    {
        $this->matkul = $matkul;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }

    public function grade()
    {
        if ($this->nilai < 56)
            return "TIDAK LULUS";
        elseif ($this->nilai >= 56 && $this->nilai <= 100)
            return "LULUS";
        else
            return "Nilai tidak valid";
    }

    public function hasil()
    {
        if ($this->nilai < 35)
            return "E";
        elseif ($this->nilai >= 35 && $this->nilai < 55)
            return "D";
        elseif ($this->nilai >= 56 && $this->nilai < 69)
            return "C";
        elseif ($this->nilai >= 70 && $this->nilai < 84)
            return "B";
        elseif ($this->nilai >= 85 && $this->nilai <= 100)
            return "A";
        else
            return "Nilai tidak valid";
    }

    public function displayResult()
    {
        echo "<h2>Hasil Nilai Mahasiswa</h2>";
        echo "<p><strong>NIM:</strong> " . $this->nim . "</p>";
        echo "<p><strong>Mata Kuliah:</strong> " . $this->matkul . "</p>";
        echo "<p><strong>Nilai:</strong> " . $this->nilai . "</p>";
        echo "<p><strong>Hasil:</strong> " . $this->hasil() . "</p>";
        echo "<p><strong>Grade:</strong> " . $this->grade() . "</p>";
    }
}
?>