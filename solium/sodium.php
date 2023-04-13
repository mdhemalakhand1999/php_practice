<?PHP
class Sodium {
    static function addForm($id):Sodium {}
    function addColumn($columnSize):Sodium {}
    function addFields(FieldInterface ...$fields):Sodium {}
}

class FieldFactory {
    static function createTextField():FieldInterface {}
    static function createRadio():FieldInterface {}
}
class TextField extends AbstractField {

}
class Radio extends AbstractField {

}
class GoogleMap extends AbstractField {

}
class AbstractField implements FieldInterface {
    static function create(): FieldInterface {}
    function setID(): FieldInterface{}
    function setLabel(): FieldInterface{}
    function setValueDefault(): FieldInterface{}
    function setValue(): FieldInterface{}
}
interface FieldInterface {
    static function create($id): FieldInterface;
    function setID(): FieldInterface;
    function setLabel(): FieldInterface;
    function setValueDefault(): FieldInterface;
    function setValue(): FieldInterface;
}
// Sodium::addForm("MyForm")->addColumn(70)->addFields()(
//     FieldFactory::createTextField()->setID(),
//     FieldFactory::createRadio()->setLabel()->setValueDefault()
// )


Sodium::addForm('form')->addFields(
    TextField::create('id')->setValue()->setValueDefault()->setLabel(),
    GoogleMap::create('mapid')->setID()->setLabel()->setValueDefault()
);