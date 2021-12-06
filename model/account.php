<?php

class account
{
    private $id;
    private $tk;
    private $mk;
    private $dob;
    private $sdt;
    private $luong;
    private $ban;
    private $vitri;

    public function construct($id, $tk, $mk, $dob, $sdt, $luong, $ban, $vitri)
    {
        $this->id = $id;
        $this->tk = $tk;
        $this->mk = $mk;
        $this->dob = $dob;
        $this->sdt = $sdt;
        $this->luong = $luong;
        $this->ban = $ban;
        $this->vitri = $vitri;
    }
}
