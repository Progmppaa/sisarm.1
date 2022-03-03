<?php

namespace Database\Seeders;

use App\Models\Armas;
use Illuminate\Database\Seeder;

class ArmamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Armas::create(['codigo'=>'AA-1', 'nombre'=>'PISTOLA DE DOBLE ACCION','marca'=>' FN','modelo'=>'DA-140','calibre'=>'7,65X17mm']);
        Armas::create(['codigo'=>'AA-10', 'nombre'=>'PISTOLA','marca'=>'FN','modelo'=>'M-10','calibre'=>'7,65X17mm']);
        Armas::create(['codigo'=>'AA-11', 'nombre'=>'PISTOLA DE DOBLE ACCION','marca'=>' TANFOGLIO','modelo'=>'POLICE','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AA-12', 'nombre'=>'PISTOLA DE DOBLE ACCION','marca'=>'SIG-SAUER','modelo'=>'P228','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AA-13', 'nombre'=>'PISTOLA DE DOBLE ACCION','marca'=>'STIKE ONE','modelo'=>'AF1','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AA-14', 'nombre'=>'PISTOLA DE DOBLE ACCION','marca'=>'BERETTA','modelo'=>'90TWO','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AA-15', 'nombre'=>'PISTOLA DE DOBLE ACCION','marca'=>'CAVIM','modelo'=>'ZAMORANA','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AA-16', 'nombre'=>'PISTOLA','marca'=>'WALTER','modelo'=>'P-99','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AA-17', 'nombre'=>'PISTOLA','marca'=>'WALTER','modelo'=>'P-5','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AA-18', 'nombre'=>'PISTOLA','marca'=>'FN','modelo'=>'M-10','calibre'=>'9X17mm']);
        Armas::create(['codigo'=>'AA-19', 'nombre'=>'PISTOLA DE AIRE','marca'=>'HAMMERLI','modelo'=>'480','calibre'=>'4,5mm']);
        Armas::create(['codigo'=>'AA-2', 'nombre'=>'PISTOLA DE GRAN POTENCIA','marca'=>' FN','modelo'=>'MKI','calibre'=>'9X19 MM']);
        Armas::create(['codigo'=>'AA-2', 'nombre'=>'PISTOLA DE GRAN POTENCIA','marca'=>' FN','modelo'=>'MKII','calibre'=>'9X19 MM']);
        Armas::create(['codigo'=>'AA-2','nombre'=>'PISTOLA DE GRAN POTENCIA','marca'=>' FN','modelo'=>'MKIII','calibre'=>'9X19 MM']);
        Armas::create(['codigo'=>'AA-20','nombre'=>'PISTOLA OLIMPICA','marca'=>'WALTER','modelo'=>'GSP','calibre'=>'32']);
        Armas::create(['codigo'=>'AA-21','nombre'=>'PISTOLA OLIMPICA','marca'=>'COLT','modelo'=>'LR','calibre'=>'22']);
        Armas::create(['codigo'=>'AA-22','nombre'=>'PISTOLA DE AIRE','marca'=>'GAMO','modelo'=>'P900','calibre'=>'4,5mm']);
        Armas::create(['codigo'=>'AA-23','nombre'=>'PISTOLA DE AIRE','marca'=>' AIR MATCH','modelo'=>'600','calibre'=>'4,5mm']);
        Armas::create(['codigo'=>'AA-24','nombre'=>'PISTOLA DE AIRE','marca'=>'FEINWERKBAU','modelo'=>'80','calibre'=>'4,5mm']);
        Armas::create(['codigo'=>'AA-25','nombre'=>'PISTOLA DE AIRE','marca'=>'WALTER','modelo'=>'CP2','calibre'=>'4,5mm']);
        Armas::create(['codigo'=>'AA-26','nombre'=>'PISTOLA DE AIRE','marca'=>'CROSSMAN','modelo'=>'AIRGUNS','calibre'=>'4,5mm']);
        Armas::create(['codigo'=>'AA-26','nombre'=>'PISTOLA DE AIRE','marca'=>'CROSSMAN','modelo'=>'1600','calibre'=>'4,5mm']);
        Armas::create(['codigo'=>'AA-27','nombre'=>'PISTOLA DE AIRE','marca'=>'DAISY','modelo'=>'188','calibre'=>'4,5mm']);
        Armas::create(['codigo'=>'AA-3','nombre'=>'PISTOLA DE DOBLE ACCION','marca'=>'SIG SAUER','modelo'=>'P226','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AA-4','nombre'=>'PISTOLA DE DOBLE ACCION','marca'=>'FN','modelo'=>'BDA9','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AA-5','nombre'=>'PISTOLA DE DOBLE ACCION','marca'=>'BERETTA','modelo'=>'92FS','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AA-7','nombre'=>'PISTOLA DE DOBLE ACCION','marca'=>'BERETTA','modelo'=>'PX-4','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AA-8','nombre'=>'PISTOLA DE GRAN CAPACIDAD','marca'=>'IMBEL','modelo'=>'MD-1','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AA-9','nombre'=>'PISTOLA','marca'=>'GLOCK','modelo'=>'17','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AC-1','nombre'=>'PISTOLA LANZA SEÑALES','marca'=>'DIANA WERK RASTTAT','modelo'=>'','calibre'=>' 26,5mm']);
        Armas::create(['codigo'=>'AC-2','nombre'=>'PISTOLA LANZA SEÑALES','marca'=>'HK','modelo'=>'','calibre'=>' 26,5mm']);
        Armas::create(['codigo'=>'AC-3','nombre'=>'PISTOLA LANZA SEÑALES','marca'=>'M57','modelo'=>'','calibre'=>' 26,5mm']);
        Armas::create(['codigo'=>'AD-1','nombre'=>'REVOLVER','marca'=>'COLT','modelo'=>'POSITIVE','calibre'=>'38 SPL']);
        Armas::create(['codigo'=>'AD-13','nombre'=>'REVOLVER','marca'=>'SMITH Y WESSON','modelo'=>'','calibre'=>'44']);
        Armas::create(['codigo'=>'AD-14','nombre'=>'REVOLVER','marca'=>'COLT','modelo'=>'DIAMONBACK','calibre'=>'357']);
        Armas::create(['codigo'=>'AD-15','nombre'=>'REVOLVER','marca'=>'COLT','modelo'=>'COBRA','calibre'=>'357']);
        Armas::create(['codigo'=>'AD-16','nombre'=>'REVOLVER','marca'=>'SMITH Y WESSON','modelo'=>'10-may','calibre'=>'38 SPL']);
        Armas::create(['codigo'=>'AD-17','nombre'=>'REVOLVER','marca'=>'SMITH Y WESSON','modelo'=>'10-5 CAÑON CORTO','calibre'=>'38 SPL']);
        Armas::create(['codigo'=>'AD-18','nombre'=>'REVOLVER','marca'=>'SMITH Y WESSON','modelo'=>'10-5 CAÑON NORMAL','calibre'=>'38 SPL']);
        Armas::create(['codigo'=>'AD-19','nombre'=>'REVOLVER','marca'=>'SMITH Y WESSON','modelo'=>'10-5 CAÑON LARGO','calibre'=>'38 SPL']);
        Armas::create(['codigo'=>'AD-20','nombre'=>'REVOLVER','marca'=>'SMITH Y WESSON','modelo'=>'10-08 Y 10-10 CAÑON REFORZADO','calibre'=>'38 SPL']);
        Armas::create(['codigo'=>'AD-21','nombre'=>'REVOLVER','marca'=>'HWM GERMANY','modelo'=>'','calibre'=>'38 SPL']);
        Armas::create(['codigo'=>'AD-22','nombre'=>'REVOLVER','marca'=>'','modelo'=>'JAGUAR','calibre'=>'38 SPL']);
        Armas::create(['codigo'=>'AD-23','nombre'=>'REVOLVER','marca'=>'RANGER 102','modelo'=>'','calibre'=>'38 SPL']);
        Armas::create(['codigo'=>'AD-24','nombre'=>'REVOLVER','marca'=>'ROSSI','modelo'=>'','calibre'=>'38 SPL']);
        Armas::create(['codigo'=>'AD-25','nombre'=>'REVOLVER','marca'=>'TAURUS','modelo'=>'','calibre'=>'38 SPL']);
        Armas::create(['codigo'=>'AD-26','nombre'=>'REVOLVER OLIMPICO','marca'=>'CLOT','modelo'=>'OFFICERS','calibre'=>'22']);
        Armas::create(['codigo'=>'AD-3','nombre'=>'REVOLVER','marca'=>'RUGER','modelo'=>'SPEED-SIX','calibre'=>'357']);
        Armas::create(['codigo'=>'AF-1','nombre'=>'SUB-AMETRALLADORA ','marca'=>'MADSEN','modelo'=>'','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AF-11','nombre'=>'SUB-AMETRALLADORA','marca'=>'','modelo'=>'K','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AF-12','nombre'=>'SUB-AMETRALLADORA','marca'=>'HK','modelo'=>'MP5','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AF-13','nombre'=>'SUB-AMETRALLADORA','marca'=>'HK','modelo'=>'MP5 POF','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AF-14','nombre'=>'SUB-AMETRALLADORA','marca'=>'HK','modelo'=>'MP5 SD','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AF-15','nombre'=>'SUB-AMETRALLADORA','marca'=>'AUG/SA','modelo'=>'','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AF-16','nombre'=>'SUB-AMETRALLADORA','marca'=>'FN','modelo'=>'P-90','calibre'=>'7X28mm']);
        Armas::create(['codigo'=>'AF-2','nombre'=>'SUB-AMETRALLADORA','marca'=>'','modelo'=>'UZI','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AF-3','nombre'=>'SUB-AMETRALLADORA','marca'=>'BERETTA','modelo'=>'CX4','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AF-4','nombre'=>'SUB-AMETRALLADORA','marca'=>'IMI','modelo'=>'MINI-UZI','calibre'=>'9X19mm']);
        Armas::create(['codigo'=>'AG1','nombre'=>'AMETRALLADORA A GAS','marca'=>'SACO LOWELL SHOTP','modelo'=>'M60','calibre'=>'7,62X51mm']);
        Armas::create(['codigo'=>'AG-11','nombre'=>'CANON DE FOGUEO PARA AMETRALLADORAS PESADA','marca'=>'FN','modelo'=>'M2 QCB','calibre'=>'12,7X99mm']);
        Armas::create(['codigo'=>'AG-12','nombre'=>'AFUSTE ANTI AEREO PARA AMETRALLADORAS PESADA','marca'=>'FN','modelo'=>'M-63','calibre'=>'']);
        Armas::create(['codigo'=>'AG-13','nombre'=>'AFUSTE TERRESTRE PARA AMETRALLADORAS PESADA','marca'=>'','modelo'=>'M2 QCB','calibre'=>'']);
        Armas::create(['codigo'=>'AG2','nombre'=>'AMETRALLADORA DE APOYO GENERAL','marca'=>'FN','modelo'=>'M-61','calibre'=>'7,62X51mm']);
        Armas::create(['codigo'=>'AG3','nombre'=>'AMETRALLADORA PESADA','marca'=>'FN','modelo'=>'M2 QCB','calibre'=>'12,7X99mm']);
        Armas::create(['codigo'=>'AG4','nombre'=>'AMETRALLADORA DE INFANTERIA','marca'=>'  FN','modelo'=>' MINIMI','calibre'=>'5,56X45mm']);
        Armas::create(['codigo'=>'AH-1','nombre'=>'FUSIL','marca'=>'  FN','modelo'=>'46','calibre'=>' 7mm']);
        Armas::create(['codigo'=>'AH-12','nombre'=>'FUSIL','marca'=>' GALIL','modelo'=>'','calibre'=>' 5,56X45mm']);
        Armas::create(['codigo'=>'AH-15','nombre'=>'FUSIL DE FRANCO TIRADOR','marca'=>'','modelo'=>' SVD','calibre'=>'7,62X54mm']);
        Armas::create(['codigo'=>'AH-23','nombre'=>'FUSIL DE ASALTO','marca'=>' KALASHNIKOV','modelo'=>' AK-103','calibre'=>' 7,62X39mm']);
        Armas::create(['codigo'=>'AH-25','nombre'=>'FUSIL DE FRANCO TIRADOR','marca'=>' CATATUMBO','modelo'=>'','calibre'=>' 7,62X39mm']);
        Armas::create(['codigo'=>'AH-30','nombre'=>'FUSIL DE FRANCO TIRADOR ','marca'=>' REMINTONG-700','modelo'=>'','calibre'=>' 7,62X51mm']);
        Armas::create(['codigo'=>'AH-31','nombre'=>'FUSIL DE FRANCO TIRADOR','marca'=>' HK','modelo'=>' MSG90','calibre'=>' 7,62X51mm']);
        Armas::create(['codigo'=>'AH-32','nombre'=>'FUSIL DE FRANCO TIRADOR','marca'=>' WINCHESTER','modelo'=>'  M-14','calibre'=>' 7,62X51mm']);
        Armas::create(['codigo'=>'AH-33','nombre'=>'FUSIL AUTOMATICO PESADO','marca'=>' FN','modelo'=>' M-61T2','calibre'=>' 7,62X51mm']);
        Armas::create(['codigo'=>'AH-34','nombre'=>'FUSIL','marca'=>' GALIL','modelo'=>'','calibre'=>' 7,62X51mm']);
        Armas::create(['codigo'=>'AH-35','nombre'=>'FUSIL','marca'=>' SIG SAUER','modelo'=>'205','calibre'=>'308']);
        Armas::create(['codigo'=>'AH-36','nombre'=>'FUSIL AUTOMATICO LIVIANO PARA INSTRUCCION GOMA','marca'=>'','modelo'=>' M-61T1','calibre'=>'']);
        Armas::create(['codigo'=>'AH-37','nombre'=>'FUSIL','marca'=>' FN','modelo'=>'30','calibre'=>' 7mm']);
        Armas::create(['codigo'=>'AH-38','nombre'=>'FUSIL','marca'=>' COLT','modelo'=>' M16A2','calibre'=>' 5,56X45mm']);
        Armas::create(['codigo'=>'AH-39','nombre'=>'FUSIL','marca'=>' COLT','modelo'=>' M16A4','calibre'=>' 5,56X45mm']);
        Armas::create(['codigo'=>'AH-40','nombre'=>'FUSIL','marca'=>' COLT','modelo'=>' COMANDO M16','calibre'=>' 5,56X45mm']);
        Armas::create(['codigo'=>'AH-41','nombre'=>'FUSIL','marca'=>'','modelo'=>' R15','calibre'=>'']);
        Armas::create(['codigo'=>'AH-42','nombre'=>'FUSIL','marca'=>' AUG/SA','modelo'=>'','calibre'=>' 5,56X45mm']);
        Armas::create(['codigo'=>'AH-43','nombre'=>'FUSIL','marca'=>' KE','modelo'=>' HK-33KE','calibre'=>' 5,56X45mm']);
        Armas::create(['codigo'=>'AH-44','nombre'=>'FUSIL','marca'=>' VECKTOR','modelo'=>'  CR21','calibre'=>' 5,56X45mm']);
        Armas::create(['codigo'=>'AH-45','nombre'=>'FUSIL DE ASALTO SIG SAUGER   ','marca'=>'','modelo'=>' SG 550-02','calibre'=>' 5,56X45 mm']);
        Armas::create(['codigo'=>'AH-46','nombre'=>'FUSIL','marca'=>' TANNER','modelo'=>'','calibre'=>' 6mm']);
        Armas::create(['codigo'=>'AH-47','nombre'=>'FUSIL DE AIRE','marca'=>' SIG SAUER','modelo'=>' HAMMERLLI','calibre'=>' 4,5mm']);
        Armas::create(['codigo'=>'AH-5','nombre'=>'FUSIL AUTOMATICO LIVIANO','marca'=>' FN','modelo'=>' M-61T1','calibre'=>'  7,62X51mm']);
        Armas::create(['codigo'=>'AH-6','nombre'=>'FUSIL AUTOMATICO LIVIANO','marca'=>'  FN','modelo'=>' M-63','calibre'=>' 7,62X51mm']);
        Armas::create(['codigo'=>'AH-7','nombre'=>'FUSIL AUTOMATICO LIVIANO','marca'=>' FN','modelo'=>' M-74','calibre'=>' 7,62X51mm']);
        Armas::create(['codigo'=>'AH-8','nombre'=>'FUSIL DE ASALTO','marca'=>' FN','modelo'=>' FNC','calibre'=>'  5,56X45mm']);
        Armas::create(['codigo'=>'AK-1','nombre'=>'CARABINA LANZA GAS SIMPLE','marca'=>'  FEDERAL','modelo'=>'','calibre'=>' 37/38mm']);
        Armas::create(['codigo'=>'AK-12','nombre'=>'CARABINA LANZA GAS MULTIPLE','marca'=>' NORINCO','modelo'=>'','calibre'=>' 40mm']);
        Armas::create(['codigo'=>'AK-13','nombre'=>'CARABINA LANZA GAS SIMPLE','marca'=>' DEF. TEC PC1375','modelo'=>'','calibre'=>' 40mm']);
        Armas::create(['codigo'=>'AK-14','nombre'=>'CARABINA LANZA GAS MULTIPLE','marca'=>'  DEF. TEC','modelo'=>'','calibre'=>' 37/38mm']);
        Armas::create(['codigo'=>'AK-15','nombre'=>'CARABINA LANZA GAS MULTIPLE','marca'=>' FEDERAL','modelo'=>'','calibre'=>' 37/38mm']);
        Armas::create(['codigo'=>'AK-16','nombre'=>'CARABINA LANZA GAS MULTIPLE','marca'=>' NORINCO','modelo'=>'NAGR-38','calibre'=>' 37/38mm']);
        Armas::create(['codigo'=>'AK-17','nombre'=>'CARABINA LANZA GAS','marca'=>' JAMES TOWN','modelo'=>' TL1 PENN','calibre'=>' 37/38mm']);
        Armas::create(['codigo'=>'AK-18','nombre'=>'CARABINA LANZA GAS SIMPLE','marca'=>' COMBINET TACTICAL','modelo'=>' 37LT1','calibre'=>' 37mm']);
        Armas::create(['codigo'=>'AK-19','nombre'=>'CARABINA LANZA GAS SIMPLE','marca'=>' DEFENSA TECHNOLOGY','modelo'=>'','calibre'=>' 37mm']);
        Armas::create(['codigo'=>'AK-2','nombre'=>'CARABINA LANZA GAS SIMPLE NAGR-38 ','marca'=>' NORINCO','modelo'=>'','calibre'=>' 37/38mm']);
        Armas::create(['codigo'=>'AM-19','nombre'=>'ESCOPETA','marca'=>' AKKAR','modelo'=>' KARATAY','calibre'=>'12']);
        Armas::create(['codigo'=>'AM-20','nombre'=>'ESCOPETA','marca'=>' MOSSBERG','modelo'=>' 500-A','calibre'=>'12']);
        Armas::create(['codigo'=>'AM-21','nombre'=>'ESCOPETA','marca'=>' MOSSBERG','modelo'=>'590','calibre'=>'12']);
        Armas::create(['codigo'=>'AM-22','nombre'=>'ESCOPETA','marca'=>' MOSSBERG','modelo'=>' MAVERIC','calibre'=>'12']);
        Armas::create(['codigo'=>'AM-23','nombre'=>'ESCOPETA','marca'=>' FN','modelo'=>' EBAM','calibre'=>'12']);
        Armas::create(['codigo'=>'AM-24','nombre'=>'ESCOPETA','marca'=>' REMINGTON','modelo'=>'870','calibre'=>'12']);
        Armas::create(['codigo'=>'AM-25','nombre'=>'ESCOPETA','marca'=>' REMINGTON','modelo'=>'1100','calibre'=>'12']);
        Armas::create(['codigo'=>'AM-26','nombre'=>'ESCOPETA','marca'=>' NORINCO','modelo'=>' HP-9','calibre'=>'12']);
        Armas::create(['codigo'=>'AM-27','nombre'=>'ESCOPETA','marca'=>' NORINCO','modelo'=>' JW-2005','calibre'=>'12']);
        Armas::create(['codigo'=>'AM-28','nombre'=>'ESCOPETA COBRA SARSILMAZ 1880-DEN BERI  ','marca'=>'','modelo'=>'','calibre'=>'12']);
        Armas::create(['codigo'=>'AM-3','nombre'=>'ESCOPETA','marca'=>' AKKAR','modelo'=>' TACTICA','calibre'=>'12']);
        Armas::create(['codigo'=>'AM-4','nombre'=>'ESCOPETA','marca'=>' SMITH & WESSON','modelo'=>'  916-A','calibre'=>'12']);
        Armas::create(['codigo'=>'AM-5','nombre'=>'ESCOPETA','marca'=>' CAVIM','modelo'=>' SOBERANA','calibre'=>'12']);
        Armas::create(['codigo'=>'AM-6','nombre'=>'ESCOPETA','marca'=>' VALTRO','modelo'=>' PM5','calibre'=>'12']);
        Armas::create(['codigo'=>'AM-8','nombre'=>'ESCOPETA','marca'=>' WINCHESTER','modelo'=>'','calibre'=>'12']);
        Armas::create(['codigo'=>'AM-9','nombre'=>'ESCOPETA BROWNING','marca'=>'','modelo'=>'','calibre'=>'12']);
        Armas::create(['codigo'=>'AN-1','nombre'=>'MORTERO CAZADOR','marca'=>'','modelo'=>'','calibre'=>' 60mm']);
        Armas::create(['codigo'=>'AN-12','nombre'=>'MORTERO SURAFRICANO CORTO ALCANCE','marca'=>'','modelo'=>'','calibre'=>' 60mm']);
        Armas::create(['codigo'=>'AN-15','nombre'=>'MORTERO SURAFRICANO LARGO ALCANCE','marca'=>'','modelo'=>'','calibre'=>' 60mm']);
        Armas::create(['codigo'=>'AN-2','nombre'=>'MORTERO BRANT','marca'=>'','modelo'=>'','calibre'=>' 60mm']);
        Armas::create(['codigo'=>'AN-5','nombre'=>'MORTERO BRANT CALIBRE 81mm','marca'=>'','modelo'=>'','calibre'=>'']);
        Armas::create(['codigo'=>'AV4','nombre'=>'AFUSTE TERRESTRE PARA MAG M-61','marca'=>'','modelo'=>' M4','calibre'=>'']);
        Armas::create(['codigo'=>'LGA','nombre'=>'LANZA GRANADAS AUTOMATICO','marca'=>' GENERAL DYNAMICS','modelo'=>' MK-19','calibre'=>' 40X53mm']);
        Armas::create(['codigo'=>'LGG','nombre'=>'LANZA GRANADA','marca'=>'R/M EQUIMPEMENT','modelo'=>' M203PI','calibre'=>' 40mm']);
        Armas::create(['codigo'=>'RPG','nombre'=>'LANZA GRANADAS','marca'=>'','modelo'=>' RPG-7V','calibre'=>' 40m']);
    }
}