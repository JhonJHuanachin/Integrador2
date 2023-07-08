<?
use PHPUnit\Framework\TestCase;

class ControladorIncidenteTest extends TestCase
{
    private $controlador;
    private $conexionMock;
    private $stmtMock;

    protected function setUp(): void
    {
        $this->conexionMock = $this->getMockBuilder(PDO::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->stmtMock = $this->getMockBuilder(PDOStatement::class)
            ->getMock();

        $this->controlador = new ControladorIncidente($this->conexionMock);
    }

    public function testAgregarIncidenteDeberiaRetornarTrue()
    {
        // Arrange
        $categoria = 'Hardware';
        $telefono = '123456789';
        $descripcion = 'Descripción del incidente';
        $imagen = 'imagen.jpg';

        $this->stmtMock->expects($this->once())
            ->method('execute')
            ->willReturn(true);

        $this->conexionMock->expects($this->once())
            ->method('prepare')
            ->willReturn($this->stmtMock);

        // Act
        $resultado = $this->controlador->agregarIncidente($categoria, $telefono, $descripcion, $imagen);

        // Assert
        $this->assertTrue($resultado);
    }

    public function testAgregarIncidenteDeberiaRetornarFalse()
    {
        // Arrange
        $categoria = 'Hardware';
        $telefono = '123456789';
        $descripcion = 'Descripción del incidente';
        $imagen = 'imagen.jpg';

        $this->stmtMock->expects($this->once())
            ->method('execute')
            ->willReturn(false);

        $this->conexionMock->expects($this->once())
            ->method('prepare')
            ->willReturn($this->stmtMock);

        // Act
        $resultado = $this->controlador->agregarIncidente($categoria, $telefono, $descripcion, $imagen);

        // Assert
        $this->assertFalse($resultado);
    }
}


?>