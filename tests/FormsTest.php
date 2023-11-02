    <?php

    use PHPUnit\Framework\TestCase;
    use App\Forms;

    class FormsTest extends TestCase
    {
        private $forms;

        protected function setUp(): void
        {
            $this->forms = new Forms();
        }

        public function testVerifierValidForm()
        {
            $result = $this->forms->verifier('Ardito', 'Bonny', 'ardito.b@gmail.com');
            $this->assertTrue($result);
        }

        public function testVerifierInvalidNom()
        {
            $result = $this->forms->verifier('123Ardito', 'Bonny', 'ardito.b@gmail.com');
            $this->assertFalse($result);
        }

        public function testVerifierInvalidPrenom()
        {
            $result = $this->forms->verifier('Ardito', '123Bonny', 'ardito.b@gmail.com');
            $this->assertFalse($result);
        }

        public function testVerifierInvalidEmail()
        {
            $result = $this->forms->verifier('Ardito', 'Bonny', 'ardito.b.com');
            $this->assertFalse($result);
        }
    }
