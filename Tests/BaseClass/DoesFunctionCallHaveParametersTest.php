<?php
/**
 * Function parameters test file
 *
 * @package PHPCompatibility
 */


/**
 * Function parameters function tests
 *
 * @group utilityDoesFunctionCallHaveParameters
 * @group utilityFunctions
 *
 * @uses    BaseClass_MethodTestFrame
 * @package PHPCompatibility
 * @author  Juliette Reinders Folmer <phpcompatibility_nospam@adviesenzo.nl>
 */
class BaseClass_DoesFunctionCallHaveParametersTest extends BaseClass_MethodTestFrame
{

    /**
     * The file name for the file containing the test cases within the
     * `sniff-examples/utility-functions/` directory.
     *
     * @var string
     */
    protected $filename = 'does_function_call_have_parameters.php';

    /**
     * testDoesFunctionCallHaveParameters
     *
     * @dataProvider dataDoesFunctionCallHaveParameters
     *
     * @covers PHPCompatibility_Sniff::doesFunctionCallHaveParameters
     *
     * @param int    $stackPtr Stack pointer for a T_CLASS token in the test file.
     * @param string $expected The expected fully qualified class name.
     */
    public function testDoesFunctionCallHaveParameters($stackPtr, $expected) {
        $result = $this->helperClass->doesFunctionCallHaveParameters($this->_phpcsFile, $stackPtr);
        $this->assertSame($expected, $result);
    }

    /**
     * dataDoesFunctionCallHaveParameters
     *
     * @see testDoesFunctionCallHaveParameters()
     *
     * @return array
     */
    public function dataDoesFunctionCallHaveParameters()
    {
        return array(
            array(12, false),
            array(17, false),
            array(23, false),
            array(31, false),
            array(42, true),
            array(50, true),
            array(60, true),
        );
    }

}
