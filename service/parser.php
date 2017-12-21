<?php
/**
 * Inverted Index Parser Class
 *
 * @category    PHP
 * @package     PHP Index Parser
 * @author      narendrakamadi@gmail.com
 */
class Parser
{
    private $_parserContent;
    private $_outputType;

    public function __construct($data)
    {
        $this->_parserContent = $_POST['parser_field'];
        $this->_outputType = $_POST['output_type'];
    }

    /**
     * Process data and return meaningfull information
     *
     * @return array, JSON
     */
    public function getResult()
    {
        $data = $this->_cleanData($this->_parserContent);
        $wordCollection = str_word_count($data, 1);
        $wordCount = array_count_values($wordCollection);
        arsort($wordCount);

        $dataArray = [];
        $i = 1;
        foreach ($wordCount as $word => $count) {
            $dataArray[] = [
                'word' => $word,
                'count' => $count,
                'rank' => $i++
            ];
        }

        $output = JSON_ENCODE($dataArray);
        if ($this->_outputType === 'Array') {
            $output = $dataArray;
        }

        return $output;
    }

    /**
     * Remove special characters and html tag from content
     *
     * @return string
     */
    private function _cleanData($parserContent)
    {
        return preg_replace("/[^a-zA-Z0-9\s]/", "", strip_tags($parserContent));
    }
}