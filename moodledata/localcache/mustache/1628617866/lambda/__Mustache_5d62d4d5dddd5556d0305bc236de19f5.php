<?php

class __Mustache_5d62d4d5dddd5556d0305bc236de19f5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="hidden border-bottom px-2 py-3 view-search" aria-hidden="true" data-region="view-search">
';
        $buffer .= $indent . '    <div class="d-flex align-items-center">
';
        $buffer .= $indent . '        <a
';
        $buffer .= $indent . '            class="mr-2 align-self-stretch d-flex align-items-center"
';
        $buffer .= $indent . '            href="#"
';
        $buffer .= $indent . '            data-route-back
';
        $buffer .= $indent . '            data-action="cancel-search"
';
        $buffer .= $indent . '        >
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_icon_back')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '        <div class="input-append m-0 d-flex flex-grow">
';
        $buffer .= $indent . '            <input
';
        $buffer .= $indent . '                type="text"
';
        $buffer .= $indent . '                class="form-control border-right-0 searchinput"
';
        $buffer .= $indent . '                placeholder="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section507b9f28a10a9aed70b7b7a308c6a3ca($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section507b9f28a10a9aed70b7b7a308c6a3ca($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                data-region="search-input"
';
        $buffer .= $indent . '            >
';
        $buffer .= $indent . '            <button
';
        $buffer .= $indent . '                class="btn m-0"
';
        $buffer .= $indent . '                type="button"
';
        $buffer .= $indent . '                data-action="search"
';
        $buffer .= $indent . '            >
';
        $buffer .= $indent . '                <span data-region="search-icon-container">
';
        $buffer .= $indent . '                    ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section31a49b2ab335cdb4725ddb42ed8de96c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '                <span class="hidden" data-region="loading-icon-container">
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section507b9f28a10a9aed70b7b7a308c6a3ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' search, core_search ';
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
                
                $buffer .= ' search, core_search ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31a49b2ab335cdb4725ddb42ed8de96c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' a/search, core ';
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
                
                $buffer .= ' a/search, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
