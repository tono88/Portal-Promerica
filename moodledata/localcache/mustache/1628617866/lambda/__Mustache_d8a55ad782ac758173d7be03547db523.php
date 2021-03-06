<?php

class __Mustache_d8a55ad782ac758173d7be03547db523 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="d-flex p-3">
';
        $buffer .= $indent . '    <button
';
        $buffer .= $indent . '        class="btn btn-link btn-icon my-1 icon-size-4 ml-auto"
';
        $buffer .= $indent . '        data-action="delete-selected-messages"
';
        $buffer .= $indent . '        data-toggle="tooltip"
';
        $buffer .= $indent . '        data-placement="top"
';
        $buffer .= $indent . '        title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6910e05b9a1417486b5764734b1a6842($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '        <span data-region="icon-container">';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section0601b851dc2d09e2cc0679821ca5710a($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        <span class="hidden" data-region="loading-icon-container">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</span>
';
        $buffer .= $indent . '        <span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6910e05b9a1417486b5764734b1a6842($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section6910e05b9a1417486b5764734b1a6842(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' deleteselectedmessages, core_message ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' deleteselectedmessages, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0601b851dc2d09e2cc0679821ca5710a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/trash, core ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/trash, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
