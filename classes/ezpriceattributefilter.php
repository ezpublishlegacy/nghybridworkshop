<?php

/**
 * eZPriceAttributeFilter class implements TagsAttributeFilter extended attribute
 *
 */
class eZPriceAttributeFilter
{
    /**
     * Creates and returns SQL parts used in fetch functions
     *
     * @return array
     */
    function createSqlParts( $params )
    {
        $returnArray = array( 'tables' => '', 'joins'  => '', 'columns' => '' );

        if ( isset( $params['price'] ) )
        {
            $price = $params['price'];
            if ( !is_int( $price ) )
            {
                return $returnArray;
            }

            $returnArray['tables'] = ", ezcontentobject_attribute as a1";

            $returnArray['joins'] = " a1.contentobject_id=ezcontentobject.id AND a1.data_type_string='ezprice' AND a1.data_float<". $price ."  AND ";
        }

        return $returnArray;
    }
}

?>