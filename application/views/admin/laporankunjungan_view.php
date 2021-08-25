<html>
    <head>
        <title>LAPORAN</title>
    </head>
    <body>
        <?php

        $template = array(
            'table_open'    => '<table border="1">'
        );

        $this->table->set_template($template);

        $this->table->set_heading('Tanggal Kunjungan' , 'Nama Pasien');
        foreach($query as $row){
            $this->table->add_row($row->Waktu, $row->Nama);
        }
        echo $this->table->generate();
        ?>
    </body>
</html>