<?php
class LevelLookUp{
      const ADMIN  = 2; //SEMUA AKSES
      const MEMBER  = 3; //HANYA TRANSAKSI
      // For CGridView, CListView Purposes
      public static function getLabel( $level ){
          if($level == self::ADMIN)
             return 'Administrator';
		  if($level == self::MEMBER)
             return 'Member';
          return false;
      }
      // for dropdown lists purposes
      public static function getLevelList(){
          return array(
                 self::ADMIN=>'Administrator',
                 self::MEMBER=>'Member');
    }
}
?>