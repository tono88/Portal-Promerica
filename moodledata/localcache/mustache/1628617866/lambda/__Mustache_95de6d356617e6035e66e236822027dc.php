<?php

class __Mustache_95de6d356617e6035e66e236822027dc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '    class="accordion-group section border-0 ';
        // 'expanded' section
        $value = $context->find('expanded');
        $buffer .= $this->section8f6a5d81f285cd598c45ac5ee2056e39($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-region="';
        $blockFunction = $context->findInBlock('region');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    <div id="';
        $blockFunction = $context->findInBlock('region');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '-toggle" class="accordion-heading" data-region="toggle">
';
        $buffer .= $indent . '        <button
';
        $buffer .= $indent . '            class="btn btn-link w-100 text-left p-2 m-0 d-flex align-items-center overview-section-toggle ';
        // 'expanded' inverted section
        $value = $context->find('expanded');
        if (empty($value)) {
            
            $buffer .= 'collapsed';
        }
        $buffer .= '"
';
        $buffer .= $indent . '            data-toggle="collapse"
';
        $buffer .= $indent . '            data-parent="#message-drawer-view-overview-container"
';
        $buffer .= $indent . '            data-target="#';
        $blockFunction = $context->findInBlock('region');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '-target"
';
        $buffer .= $indent . '            aria-expanded="';
        // 'expanded' section
        $value = $context->find('expanded');
        $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
        // 'expanded' inverted section
        $value = $context->find('expanded');
        if (empty($value)) {
            
            $buffer .= 'false';
        }
        $buffer .= '"
';
        $buffer .= $indent . '            aria-controls="';
        $blockFunction = $context->findInBlock('region');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '-target"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            <span class="collapsed-icon-container">
';
        $buffer .= $indent . '                ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionFb21be3147b00254c7256c9c85519aaf($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '            <span class="expanded-icon-container">
';
        $buffer .= $indent . '                ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section67c59c18302e3b6896a1ce2ba2852316($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '            <strong>';
        $blockFunction = $context->findInBlock('title');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '</strong>
';
        $buffer .= $indent . '            <small class="hidden ml-1" data-region="section-total-count-container">
';
        $buffer .= $indent . '                (<span data-region="section-total-count">';
        $value = $this->resolveValue($context->findDot('count.total'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</span>)
';
        $buffer .= $indent . '            </small>
';
        $buffer .= $indent . '            <span class="hidden ml-2" data-region="loading-icon-container">
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '            <span class="';
        // 'count.unread' inverted section
        $value = $context->findDot('count.unread');
        if (empty($value)) {
            
            $buffer .= 'hidden';
        }
        $buffer .= ' badge badge-pill badge-primary ml-auto bg-primary" data-region="section-unread-count">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('count.unread'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    ';
        if ($parent = $this->mustache->loadPartial('core_message/message_drawer_lazy_load_list')) {
            $context->pushBlockContext(array(
                'rootclasses' => array($this, 'block83e2b6b49e1616157536eb8c66126a68'),
                'rootattributes' => array($this, 'block7da9449e6b61ca36fb31510600eb9ec1'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section8f6a5d81f285cd598c45ac5ee2056e39(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'expanded';
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
                
                $buffer .= 'expanded';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
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
                
                $buffer .= 'true';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb21be3147b00254c7256c9c85519aaf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/collapsed, core ';
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
                
                $buffer .= ' t/collapsed, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67c59c18302e3b6896a1ce2ba2852316(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/expanded, core ';
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
                
                $buffer .= ' t/expanded, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46c7a5062fe33409002e453f5bc9a89d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show in';
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
                
                $buffer .= 'show in';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block83e2b6b49e1616157536eb8c66126a68($context)
    {
        $indent = $buffer = '';
        $buffer .= ' accordion-body collapse border-bottom ';
        // 'expanded' section
        $value = $context->find('expanded');
        $buffer .= $this->section46c7a5062fe33409002e453f5bc9a89d($context, $indent, $value);
    
        return $buffer;
    }

    public function block7da9449e6b61ca36fb31510600eb9ec1($context)
    {
        $indent = $buffer = '';
        $buffer .= '            id="';
        $blockFunction = $context->findInBlock('region');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '-target"
';
        $buffer .= $indent . '            aria-labelledby="';
        $blockFunction = $context->findInBlock('region');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '-toggle"
';
        $buffer .= $indent . '            data-parent="#message-drawer-view-overview-container"
';
    
        return $buffer;
    }
}
