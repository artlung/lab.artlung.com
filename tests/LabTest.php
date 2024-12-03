<?php


use PHPUnit\Framework\TestCase;

/**
 * Class LabTest
 *
 * @category PHP
 * @package  Tests
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  Release: 1.0
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
class LabTest extends TestCase
{

    /**
     * Constructor
     *
     * @param string|null $name
     * @param array $data
     * @param $dataName
     */
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $_SERVER['REQUEST_URI'] = 'https://lab.artlung.com/';
        $_SERVER['HTTP_HOST'] = 'lab.artlung.com';
    }

    /**
     * Test the getLab method
     *
     * @return void
     */
    public function testGetLab()
    {
        $lab = new Lab();
        $this->assertInstanceOf(Lab::class, $lab);
    }
    /**
     * Test the displayCode method
     *
     * @return void
     */
    public function testDisplayCode()
    {
        $lab = new Lab();
        ob_start();
        $lab->displayCode('');
        $output = ob_get_clean();
        $this->assertIsString($output);

    }

    /**
     * Test the printSource method
     *
     * @return void
     */
    public function testPrintSource()
    {
        $lab = new Lab();
        ob_start();
        $lab->printSource('');
        $output = ob_get_clean();
        $this->assertIsString($output);


    }

    /**
     * Test the getHeader method
     *
     * @return void
     */
    public function testGetHeader()
    {
        $lab = new Lab();
        $this->assertIsString($lab->getHeader('Test'));

    }

    /**
     * Test the getFooter method
     *
     * @return void
     */
    public function testPrintHeader()
    {
        $lab = new Lab();
        ob_start();
        $lab->printHeader('Test');
        $output = ob_get_clean();
        $this->assertIsString($output);



    }

    /**
     * Test the printFooter method
     *
     * @return void
     */
    public function testPrintFooter()
    {
        $lab = new Lab();
        ob_start();
        $lab->printFooter();
        $output = ob_get_clean();
        $this->assertIsString($output);


    }

    /**
     * Test the printCodeBlock method
     *
     * @return void
     */
    public function testPrintCodeBlock()
    {
        $lab = new Lab();
        ob_start();
        $lab->printCodeBlock('');
        $output = ob_get_clean();
        $this->assertIsString($output);
    }

    /**
     * Test the getWebmentionForm method
     *
     * @return void
     */
    public function testConstruct()
    {
        $lab = new Lab();
        $this->assertInstanceOf(Lab::class, $lab);

    }

    /**
     * Test the getWebmentionForm method
     *
     * @return void
     */
    public function testGetWebmentionForm()
    {
        $lab = new Lab();
        $this->assertIsString($lab->getWebmentionForm());

    }

    /**
     * Test the printSourceFile method
     *
     * @return void
     */
    public function testPrintSourceFile()
    {
        $lab = new Lab();
        ob_start();
        $lab->printSourceFile('');
        $output = ob_get_clean();
        $this->assertIsString($output);

    }

    // TODO THE RIGHT WAY TO DO THIS IS TO RUN THE PAGES WITH A WEBSERVER AND CHECK THE OUTPUT
    // WHICH I THINK MEANS SELENIUM OR SOMETHING LIKE THAT
    //    /**
    //     * Test Pages for existence
    //     *
    //     * @return void
    //     */
    //    public function testLabPages()
    //    {
    //        $lab = new Lab();
    //        $pageSlugs = $lab->getLabPageSlugs();
    //
    //        foreach ($pageSlugs as $slug) {
    //            ob_start();
    //            include $lab->currentPageServerDirectoryPath . 'pages/' . $slug . '/' . $slug . '.php';
    //            $page_as_string = ob_get_clean();
    //            $this->assertIsString($page_as_string, 'Page ' . $slug . ' is not a string');
    //        }
    //
    //
    //
    //    }

}
