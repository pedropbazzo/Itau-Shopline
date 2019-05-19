<?php
/**
 * Este arquivo é parte do programa Quack Itaú
 *
 * Quack Itaú é um software livre; você pode redistribuí-lo e/ou
 * modificá-lo dentro dos termos da Licença Pública Geral GNU como
 * publicada pela Fundação do Software Livre (FSF); na versão 3 da
 * Licença, ou (na sua opinião) qualquer versão.
 *
 * Este programa é distribuído na esperança de que possa ser  útil,
 * mas SEM NENHUMA GARANTIA; sem uma garantia implícita de ADEQUAÇÃO
 * a qualquer MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a
 * Licença Pública Geral GNU para maiores detalhes.
 *
 * Você deve ter recebido uma cópia da Licença Pública Geral GNU junto
 * com este programa, Se não, veja <http://www.gnu.org/licenses/>.
 *
 * @category   Quack
 * @package    Quack_Itau
 */
?>
<?php
class Quack_Itau_Block_Standard_Form extends Mage_Payment_Block_Form {
	
	protected function _construct() {
		parent::_construct();
		$this->setTemplate( 'itau/standard/form.phtml' );
	}
}

