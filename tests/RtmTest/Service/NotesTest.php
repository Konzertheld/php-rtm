<?php
/**
 * MIT License
 * ===========
 *
 * Copyright (c) 2013 Bartosz Maciaszek <bartosz.maciaszek@gmail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
 * CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @package    RtmTest
 * @author     Bartosz Maciaszek <bartosz.maciaszek@gmail.com>
 * @copyright  2013 Bartosz Maciaszek.
 * @license    http://www.opensource.org/licenses/mit-license.php  MIT License
 */

namespace RtmTest\Service;

use Rtm\Rtm;
use Rtm\ServiceTestCase;

class NotesTest extends ServiceTestCase
{
    public function getServiceMethodsMatrix()
    {
        return array(

            /** tasks.notes.add */
            array(
                Rtm::SERVICE_NOTES,
                Rtm::METHOD_NOTES_ADD,
                array('list_id' => 123, 'taskseries_id' => 123, 'task_id' => 123, 'note_title' => 'Test', 'note_text' => 'Test'),
                array('list_id' => 123, 'taskseries_id' => 123, 'task_id' => 123, 'note_title' => 'Test', 'note_text' => 'Test', 'timeline' => 1234567),
                1234567),
            array(
                Rtm::SERVICE_NOTES,
                Rtm::METHOD_NOTES_ADD,
                array('list_id' => 123, 'taskseries_id' => 123, 'task_id' => 123, 'note_title' => 'Test', 'note_text' => 'Test', 'timeline' => 123),
                array('list_id' => 123, 'taskseries_id' => 123, 'task_id' => 123, 'note_title' => 'Test', 'note_text' => 'Test', 'timeline' => 123)),

            /** tasks.notes.delete */
            array(
                Rtm::SERVICE_NOTES,
                Rtm::METHOD_NOTES_DELETE,
                array('note_id' => 123),
                array('note_id' => 123, 'timeline' => 1234567),
                1234567),
            array(
                Rtm::SERVICE_NOTES,
                Rtm::METHOD_NOTES_DELETE,
                array('note_id' => 123, 'timeline' => 123),
                array('note_id' => 123, 'timeline' => 123)),

            /** tasks.notes.edit */
            array(
                Rtm::SERVICE_NOTES,
                Rtm::METHOD_NOTES_EDIT,
                array('note_id' => 123, 'note_title' => 'Test', 'note_text' => 'Test'),
                array('note_id' => 123, 'note_title' => 'Test', 'note_text' => 'Test', 'timeline' => 1234567),
                1234567),
            array(
                Rtm::SERVICE_NOTES,
                Rtm::METHOD_NOTES_EDIT,
                array('note_id' => 123, 'note_title' => 'Test', 'note_text' => 'Test', 'timeline' => 123),
                array('note_id' => 123, 'note_title' => 'Test', 'note_text' => 'Test', 'timeline' => 123)),
        );
    }
}
