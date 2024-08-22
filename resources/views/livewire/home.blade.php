<div style="position: relative;">
    <div class="msg-container">
        @if ($showAlert)
            <div id="alert-container" class="d-flex justify-content-center alert-container " wire:poll.20s="hideAlert"
                style="position: sticky; top: 1%; z-index: 10; width: 100%;">
                <!-- wire:poll.5s="hideAlert" -->
                <p class="alert alert-success" role="alert"
                    style=" font-weight: 400;width:fit-content;padding:10px;border-radius:5px;margin-bottom:0px">
                    {{ session('success') }} 😀
                    <span class="ml-5" style="font-weight:500;margin:0px 10px 0px 20px; cursor: pointer; "
                        wire:click='hideAlert'>x</span>
                </p>
            </div>
        @endif
    </div>
    <div class="content">
        <div class="row m-0 p-0 mb-3">
            <div class="col-md-6 mb-3">
                <div class="row m-0" style="border-radius: 10px; background-color: #02114f;">
                    <div class="col-7 p-0 ps-3 pt-4">
                        @if ($this->greetingText)
                            <p class="morning-city">{{ $greetingText }}</p>
                        @endif
                        <p class="morning-city">Welcome, {{ ucwords(strtolower($loginEmployee->first_name)) }} {{ ucwords(strtolower($loginEmployee->last_name)) }}</p>
                    </div>

                    <div class="col-5 p-0">
                        <div class="morning-cardContainer w-100">
                            <div class="morning-card w-100">

                                <p class="morning-weather">PARTILY CLOUDY</p>
                                <svg class="morning-weather" version="1.1" id="Layer_1" x="0px" y="0px"
                                    width="50px" height="50px" viewBox="0 0 100 100" xml:space="preserve">
                                    <image id="image0" width="100" height="100" x="0" y="0"
                                        href="data:image/png;base64,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">
                                    </image>
                                </svg>
                                <p class="morning-temp">32°</p>
                                <div class="morning-minmaxContainer">
                                    <div class="morning-min">
                                        <p class="morning-minHeading">Min</p>
                                        <p class="morning-minTemp">30°</p>
                                    </div>
                                    <div class="morning-max">
                                        <p class="morning-maxHeading">Max</p>
                                        <p class="morning-maxTemp">32°</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-4 pb-4"
                    style="border-radius: 10px; background-color: #02114f; text-align: -webkit-center;">

                    <div class="section-banner">
                        <div id="star-1">
                            <div class="curved-corner-star">
                                <div id="curved-corner-bottomright"></div>
                                <div id="curved-corner-bottomleft"></div>
                            </div>
                            <div class="curved-corner-star">
                                <div id="curved-corner-topright"></div>
                                <div id="curved-corner-topleft"></div>
                            </div>
                        </div>

                        <div id="star-2">
                            <div class="curved-corner-star">
                                <div id="curved-corner-bottomright"></div>
                                <div id="curved-corner-bottomleft"></div>
                            </div>
                            <div class="curved-corner-star">
                                <div id="curved-corner-topright"></div>
                                <div id="curved-corner-topleft"></div>
                            </div>
                        </div>

                        <div id="star-3">
                            <div class="curved-corner-star">
                                <div id="curved-corner-bottomright"></div>
                                <div id="curved-corner-bottomleft"></div>
                            </div>
                            <div class="curved-corner-star">
                                <div id="curved-corner-topright"></div>
                                <div id="curved-corner-topleft"></div>
                            </div>
                        </div>

                        <div id="star-4">
                            <div class="curved-corner-star">
                                <div id="curved-corner-bottomright"></div>
                                <div id="curved-corner-bottomleft"></div>
                            </div>
                            <div class="curved-corner-star">
                                <div id="curved-corner-topright"></div>
                                <div id="curved-corner-topleft"></div>
                            </div>
                        </div>

                        <div id="star-5">
                            <div class="curved-corner-star">
                                <div id="curved-corner-bottomright"></div>
                                <div id="curved-corner-bottomleft"></div>
                            </div>
                            <div class="curved-corner-star">
                                <div id="curved-corner-topright"></div>
                                <div id="curved-corner-topleft"></div>
                            </div>
                        </div>

                        <div id="star-6">
                            <div class="curved-corner-star">
                                <div id="curved-corner-bottomright"></div>
                                <div id="curved-corner-bottomleft"></div>
                            </div>
                            <div class="curved-corner-star">
                                <div id="curved-corner-topright"></div>
                                <div id="curved-corner-topleft"></div>
                            </div>
                        </div>

                        <div id="star-7">
                            <div class="curved-corner-star">
                                <div id="curved-corner-bottomright"></div>
                                <div id="curved-corner-bottomleft"></div>
                            </div>
                            <div class="curved-corner-star">
                                <div id="curved-corner-topright"></div>
                                <div id="curved-corner-topleft"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <!-- main content -->

        <div class="row m-0">
            <div class="col-md-3 mb-4 ">
                <div class="home-hover">
                    <div class="homeCard4">
                        <div style="color: black; padding:10px 15px;">
                            <p style="font-size:12px;">{{ $currentDate }}</p>
                            <p style="margin-top: 10px; color: #778899; font-size: 11px;">
                                @php
                                    // Fetch shift times
                                    $EmployeeStartshiftTime = $employeeShiftDetails->shift_start_time;
                                    $EmployeeEndshiftTime = $employeeShiftDetails->shift_end_time;

                                    // Default times
                                    $defaultStartShiftTime = '10:00 am';
                                    $defaultEndShiftTime = '7:00 pm';

                                    // Format the times if they are not null
                                    $formattedStartShiftTime = $EmployeeStartshiftTime
                                        ? (new DateTime($EmployeeStartshiftTime))->format('h:i a')
                                        : $defaultStartShiftTime;
                                    $formattedEndShiftTime = $EmployeeEndshiftTime
                                        ? (new DateTime($EmployeeEndshiftTime))->format('h:i a')
                                        : $defaultEndShiftTime;

                                @endphp
                                {{ $currentDay }} | {{ $formattedStartShiftTime }} to {{ $formattedEndShiftTime }}
                            </p>
                            <div style="font-size: 14px; display: flex;margin-top:2em;">
                                <img src="/images/stopwatch.png" class="me-4" alt="Image Description"
                                    style="width: 2.7em;">
                                <p id="current-time" style="margin: auto 0;"></p>
                            </div>
                            <script>
                                function updateTime() {
                                    const currentTimeElement = document.getElementById('current-time');
                                    const now = new Date();
                                    const hours = String(now.getHours()).padStart(2, '0');
                                    const minutes = String(now.getMinutes()).padStart(2, '0');
                                    const seconds = String(now.getSeconds()).padStart(2, '0');
                                    const currentTime = `${hours} : ${minutes} : ${seconds}`;
                                    currentTimeElement.textContent = currentTime;
                                }
                                updateTime();
                                setInterval(updateTime, 1000);
                            </script>
                            <div class="A"
                                style="display: flex;flex-direction:row;justify-content:space-between; align-items:center;margin-top:2em">
                                <a style="width:50%;font-size:11px;cursor: pointer;color:blue" wire:click="open">View
                                    Swipes</a>
                                <button id="signButton"
                                    style="color: white; width: 80px; height: 26px;font-size:10px; background-color: rgb(2, 17, 79); border: 1px solid #CFCACA; border-radius: 5px; "
                                    wire:click="toggleSignState">
                                    @if ($swipes)
                                        @if ($swipes->in_or_out == 'OUT')
                                            Sign In
                                        @else
                                            Sign Out
                                        @endif
                                    @else
                                        Sign In
                                    @endif
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if ($ismanager)
                <div class="col-md-3 mb-4 ">
                    <div class="home-hover">
                        <div class="reviews">
                            <div class="homeCard1">
                                <div class="home-heading d-flex justify-content-between px-3 py-2">
                                    <div class="rounded pt-1">
                                        <p style="font-size:12px;color:#778899;font-weight:500;"> Review</p>
                                    </div>
                                    <div>
                                        <a href="/employees-review" style="font-size:16px; "><img
                                                src="/images/up-arrow.png" alt=""
                                                style="width:20px;height:27px;"></a>
                                    </div>
                                </div>
                                @if ($this->count > 0)
                                    <div class="notify d-flex justify-content-between  px-3">
                                        <p style="color: black; font-size: 12px; font-weight: 500;">
                                            {{ $count }} <br>
                                            <span style="color: #778899; font-size:11px; font-weight: 500;">Things to
                                                review</span>
                                        </p>
                                        <img src="https://png.pngtree.com/png-vector/20190214/ourlarge/pngtree-vector-notes-icon-png-image_509622.jpg"
                                            alt="" style="height: 40px; width: 40px;">
                                    </div>
                                    <div class="leave-display d-flex align-items-center border-top p-3 gap-1">
                                        @php
                                            function getRandomColor()
                                            {
                                                $colors = ['#FFD1DC', '#B0E57C', '#ADD8E6', '#E6E6FA', '#FFB6C1'];
                                                return $colors[array_rand($colors)];
                                            }
                                        @endphp
                                        @for ($i = 0; $i < min($count, 3); $i++)
                                            <?php
                                                                            $leaveRequest = $this->leaveApplied[$i]['leaveRequest'] ?? null;
                                                                            if ($leaveRequest && $leaveRequest->employee) {
                                                                                $firstName = $leaveRequest->employee->first_name;
                                                                                $lastName = $leaveRequest->employee->last_name;
                                                                                $initials = strtoupper(substr($firstName, 0, 1)) . strtoupper(substr($lastName, 0, 1));
                                                                            ?> <div class="circle-container d-flex flex-column mr-3">
                                                <div class="thisCircle d-flex"
                                                    style="border: 2px solid {{ getRandomColor() }}"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="{{ $firstName }} {{ $lastName }}">
                                                    <span>{{ $initials }}</span>
                                                </div>
                                                <span class="leaveText">Leave</span>
                                            </div>

                                            <?php
                                                                            }
                        ?>
                                        @endfor
                                        @if ($count > 3)
                                            <div class=" remainContent d-flex flex-column align-items-center"
                                                wire:click="reviewLeaveAndAttendance">
                                                <span>+{{ $count - 3 }}</span>
                                                <span class="remaining">More</span>
                                            </div>
                                        @endif
                                    </div>
                                @else
                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                        <img src="/images/not_found.png" alt="Image Description" style="width: 7em;">
                                        <p class="mb-2 homeText">
                                            Hurrah! You've nothing to review.
                                        </p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @if ($showReviewLeaveAndAttendance)
                    <div class="modal" tabindex="-1" role="dialog" style="display: block;">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(2, 17, 79); height: 50px">
                                    <h5 style="padding: 5px; color: white; font-size: 15px;" class="modal-title">
                                        <b>Review</b>
                                    </h5>
                                    <button type="button" class="btn-close btn-primary" aria-label="Close"
                                        wire:click="closereviewLeaveAndAttendance"
                                        style="background-color: white; height:10px;width:10px;">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h6 style="color:#778899;font-size:14px;">Leave Requests</h6>
                                    <div class="d-flex flex-row">
                                        @if ($count > 3)
                                            @for ($i = 3; $i <= $count; $i++)
                                                <?php
                                                                $leaveRequest = $this->leaveApplied[$i]['leaveRequest'] ?? null;
                                                                if ($leaveRequest && $leaveRequest->employee) {
                                                                    $firstName = $leaveRequest->employee->first_name;
                                                                    $lastName = $leaveRequest->employee->last_name;
                                                                    $initials = strtoupper(substr($firstName, 0, 1)) . strtoupper(substr($lastName, 0, 1));
                                                                ?> <div class=" d-flex flex-column mr-3">
                                                    <div class="thisCircle d-flex"
                                                        style="border: 2px solid {{ getRandomColor() }}"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="{{ $firstName }} {{ $lastName }}">
                                                        <span>{{ $initials }}</span>
                                                    </div>
                                                    <span
                                                        style="display: block;font-size:10px;color:#778899;">Leave</span>
                                                </div>

                                                <?php
                                                                }
                    ?>
                                            @endfor
                                        @endif
                                    </div>
                                    <h6 style="color:#778899;font-size:14px;">Attendance Requests</h6>
                                    <div class="d-flex flex-row">
                                        @for ($i = 0; $i <= $countofregularisations; $i++)
                                            <?php
                                                                            // Fetch the regularisation at the current index
                                                                            $regularisation = $this->regularisations[$i] ?? null;
                                                                            if ($regularisation && $regularisation->employee) {
                                                                                $firstName = $regularisation->employee->first_name;
                                                                                $lastName = $regularisation->employee->last_name;
                                                                                $initials = strtoupper(substr($firstName, 0, 1)) . strtoupper(substr($lastName, 0, 1));
                                                                            ?> <div class=" d-flex flex-column mr-3">
                                                <div class="thisCircle d-flex"
                                                    style="border: 2px solid {{ getRandomColor() }}"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="{{ $firstName }} {{ $lastName }}">
                                                    <span>{{ $initials }}</span>
                                                </div>
                                                <span
                                                    style="display: block;font-size:10px;color:#778899;text-align:center;overflow: hidden; text-overflow: ellipsis;max-width:30px;white-space:nowrap;">Attendance
                                                    Regularisation</span>
                                            </div>

                                            <?php
                                                                            }
                ?>
                                        @endfor
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="cancel-btn" style="border:1px solid rgb(2,17,79);"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-backdrop fade show blurred-backdrop"></div>
                @endif
            @endif

            <div class="col-md-3 mb-4 ">
                <div class="payslip-card" style="height: 195px;">
                    <p class="payslip-card-title">Upcoming Holidays</p>
                    @if ($calendarData->isEmpty())
                        <p class="payslip-small-desc">Uh oh! No holidays to show.</p>
                    @else
                        @php
                            $count = 0;
                        @endphp

                        <div class="row m-0">
                            <div class="col-7 p-0">
                                @foreach ($calendarData as $entry)
                                    @if (!empty($entry->festivals))
                                        <div>
                                            <p class="payslip-small-desc"
                                                style="color: #677A8E; font-size: 11px;margin-bottom:10px; ">
                                                <span
                                                    style="font-weight: 500;">{{ date('d M', strtotime($entry->date)) }}
                                                    <span
                                                        style="font-size: 10px; font-weight: normal;">{{ date('l', strtotime($entry->date)) }}</span></span>
                                                <br>
                                                <span
                                                    style="font-size: 11px; font-weight: normal;">{{ ucfirst($entry->festivals) }}</span>
                                            </p>
                                        </div>
                                        @php
                                            $count++;
                                        @endphp
                                    @endif

                                    @if ($count >= 3)
                                    @break
                                @endif
                            @endforeach
                        </div>
                    </div>


                @endif
                <a href="/holiday-calendar">
                    <div class="payslip-go-corner">
                        <div class="payslip-go-arrow">→</div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-3 mb-4 ">
            <div class="payslip-card" style="height: 195px;">
                <p class="payslip-card-title">Time Sheet</p>
                <p class="payslip-small-desc">
                    Submit your time sheet for this week.
                </p>
                <a href="/time-sheet">
                    <div class="payslip-go-corner">
                        <div class="payslip-go-arrow">→</div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-3 mb-4 ">
            <div class="payslip-card" style="height: 195px;">
                <p class="payslip-card-title">Apply for a Leave</p>
                <p class="payslip-small-desc">
                    Kindly click on the Arrow button to apply a leave.
                </p>
                <a href="/leave-form-page">
                    <div class="payslip-go-corner">
                        <div class="payslip-go-arrow">→</div>
                    </div>
                </a>
            </div>

        </div>

        @if ($ismanager)
            <div class="col-md-6 mb-4 ">
                <div class="home-hover">
                    <div class="homeCard6" style="padding:10px 15px;">
                        <div style="color: #677A8E;  font-weight:500; display:flex;justify-content:space-between;">
                            <p style="font-size:12px;"> Who is in?</p>
                            <a href="/whoisinchart" style="font-size:16px; "><img src="/images/up-arrow.png"
                                    alt="" style="width:20px;height:27px;"></a>
                        </div>
                        <div>
                            <div class="who-is-in d-flex flex-column justify-content-start ">
                                <p class="section-name">
                                    Not Yet In ({{ $CountAbsentEmployees }})
                                </p>
                                <div class="team-leave d-flex flex-row gap-3">
                                    @php
                                        function getRandomAbsentColor()
                                        {
                                            $colors = [
                                                '#FFD1DC',
                                                '#D2E0FB',
                                                '#ADD8E6',
                                                '#E6E6FA',
                                                '#F1EAFF',
                                                '#FFC5C5',
                                            ];
                                            return $colors[array_rand($colors)];
                                        }
                                    @endphp
                                    @if ($CountAbsentEmployees > 0)
                                        @for ($i = 0; $i < min($CountAbsentEmployees, 5); $i++)
                                            @if (isset($AbsentEmployees[$i]))
                                                @php
                                                    $employee = $AbsentEmployees[$i];
                                                    $randomColorAbsent =
                                                        '#' .
                                                        str_pad(dechex(mt_rand(0, 0xffffff)), 6, '0', STR_PAD_LEFT);
                                                @endphp <a href="/whoisinchart"
                                                    style="text-decoration: none;">
                                                    <div class="thisCircle"
                                                        style="border: 2px solid {{ getRandomAbsentColor() }};"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="{{ ucwords(strtolower($employee['first_name'])) }} {{ ucwords(strtolower($employee['last_name'])) }}">
                                                        <span class="initials">
                                                            {{ strtoupper(substr(trim($employee['first_name']), 0, 1)) }}{{ strtoupper(substr(trim($employee['last_name']), 0, 1)) }}
                                                        </span>
                                                    </div>
                                                </a>
                                            @endif
                                        @endfor
                                    @else
                                        <p style="font-size:12px;color:#778899;">No employees are absent today</p>
                                    @endif
                                    @if ($CountAbsentEmployees > 5)
                                        <div class="remainContent d-flex flex-column align-items-center mt-2"wire:click="openAbsentEmployees">
                                            <span>+{{ $CountAbsentEmployees - 5 }}</span>
                                            <p class="mb-0" style="margin-top:-5px;">More</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!-- /second row -->

                            <div class="who-is-in d-flex flex-column justify-content-start ">
                                <p class="section-name mt-1">
                                    Late Arrival ({{ $CountLateSwipes }})
                                </p>
                                <div class="team-leave d-flex flex-row  gap-3">
                                    @php
                                        function getRandomLateColor()
                                        {
                                            $colors = [
                                                '#FFD1DC',
                                                '#D2E0FB',
                                                '#ADD8E6',
                                                '#E6E6FA',
                                                '#F1EAFF',
                                                '#FFC5C5',
                                            ];
                                            return $colors[array_rand($colors)];
                                        }
                                    @endphp
                                    @if ($CountLateSwipes > 0)
                                        @for ($i = 0; $i < min($CountLateSwipes, 5); $i++)
                                            @php 
                                                 $employee=$LateSwipes[$i]; 
                                            @endphp 
                                            @if (isset($LateSwipes[$i]))
                                                <a href="/whoisinchart" style="text-decoration: none;">
                                                    <div class="circle"
                                                        style="border: 2px solid {{ getRandomAbsentColor() }};border-radius:50%;width: 35px;height: 35px;display: flex;align-items: center;justify-content: center;"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="{{ ucwords(strtolower($employee['first_name'])) }} {{ ucwords(strtolower($employee['last_name'])) }}">
                                                        <span class="initials">
                                                            {{ strtoupper(substr(trim($employee['first_name']), 0, 1)) }}{{ strtoupper(substr(trim($employee['last_name']), 0, 1)) }}
                                                        </span>
                                                    </div>
                                                </a>
                                            @endif
                                        @endfor
                                    @else
                                        <p style="font-size:12px;color:#778899;">No employees arrived late today</p>
                                    @endif
                                    @if ($CountLateSwipes > 5)
                                        <div class="remainContent d-flex flex-column align-items-center mt-2"wire:click="openLateEmployees">
                                            <span>+{{ $CountLateSwipes - 5 }}</span>
                                            <p class="mb-0" style="margin-top:-5px;">More</p>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <!-- /third row -->

                            <div class="who-is-in d-flex flex-column justify-content-start">
                                <p class="section-name mt-1">
                                    On Time ({{ $CountEarlySwipes }})
                                </p>
                                <div class="team-leave d-flex flex-row mr gap-2">
                                    @php
                                        function getRandomEarlyColor()
                                        {
                                            $colors = [
                                                '#FFD1DC',
                                                '#D2E0FB',
                                                '#ADD8E6',
                                                '#E6E6FA',
                                                '#F1EAFF',
                                                '#FFC5C5',
                                            ];
                                            return $colors[array_rand($colors)];
                                        }
                                    @endphp
                                    @if ($CountEarlySwipes)
                                        @for ($i = 0; $i < min($CountEarlySwipes, 5); $i++)
                                            @if (isset($EarlySwipes[$i]))
                                                @php
                                                    $employee = $EarlySwipes[$i];
                                                    $randomColorEarly =
                                                        '#' .
                                                        str_pad(
                                                            dechex(mt_rand(0xcccccc, 0xffffff)),
                                                            6,
                                                            '0',
                                                            STR_PAD_LEFT,
                                                        );
                                                @endphp <a href="/whoisinchart"
                                                    style="text-decoration: none;"></a>
                                                <div class="circle"
                                                    style="border: 2px solid {{ getRandomAbsentColor() }};border-radius:50%;width: 35px;height: 35px;display: flex;align-items: center;justify-content: center;"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="{{ ucwords(strtolower($employee['first_name'])) }} {{ ucwords(strtolower($employee['last_name'])) }}">
                                                    <span class="initials">
                                                        {{ strtoupper(substr(trim($employee['first_name']), 0, 1)) }}{{ strtoupper(substr(trim($employee['last_name']), 0, 1)) }}
                                                    </span>
                                                </div>
                                                </a>
                                            @endif
                                        @endfor
                                    @else
                                        <p style="font-size:12px;color:#778899;">No employees arrived early today</p>
                                    @endif
                                    @if ($CountEarlySwipes > 5)
                                        <div class="remainContent d-flex flex-column align-items-center mt-2"wire:click="openEarlyEmployees">
                                            <span>+{{ $CountEarlySwipes - 5 }}</span>
                                            <p class="mb-0" style="margin-top:-5px;">More</p>
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!-- TEAM ON LEAVE -->
        @if ($this->showLeaveApplies)
            <div class="col-md-3 mb-4 ">
                <div class="home-hover">
                    <div class="reviews">
                        <div class="homeCard4">
                            <div class="team-heading px-3 mt-2 d-flex justify-content-between">
                                <div>
                                    <p class="pt-1 teamOnLeave"> Team On Leave</pclass>
                                </div>
                                <div>
                                    <a href="/team-on-leave-chart" style="font-size:16px; "><img
                                            src="/images/up-arrow.png" alt=""
                                            style="width:20px;height:27px;"></a>
                                </div>
                            </div>
                            @if ($this->teamCount > 0)
                                <div class="team-Notify px-3">
                                    <p style="color: #778899; font-size: 11px; font-weight: 500;">
                                        Today ({{ $teamCount }}) </p>
                                    <div class="team-leave d-flex flex-row  gap-3">
                                        @php
                                            function getRandomLightColor()
                                            {
                                                $colors = ['#FFD1DC', '#B0E57C', '#ADD8E6', '#E6E6FA', '#FFB6C1'];
                                                return $colors[array_rand($colors)];
                                            }
                                        @endphp

                                        @for ($i = 0; $i < min($teamCount, 4); $i++)
                                            <?php
                                                                        $teamLeave = $this->teamOnLeave[$i] ?? null;
                                                                        if ($teamLeave) {
                                                                            $initials = strtoupper(substr($teamLeave->employee->first_name, 0, 1) . substr($teamLeave->employee->last_name, 0, 1));
                                                                        ?> <div class="thisCircle"
                                                style="  border: 2px solid {{ getRandomLightColor() }};"
                                                data-toggle="tooltip" data-placement="top"
                                                title="{{ ucwords(strtolower($teamLeave->employee->first_name)) }} {{ ucwords(strtolower($teamLeave->employee->last_name)) }}">
                                                <span>{{ $initials }}</span>
                                            </div>

                                            <?php
                                                                        }
                ?>
                                        @endfor
                                        @if ($teamCount > 4)
                                            <div class="remainContent d-flex mt-3 flex-column align-items-center">
                                                <span>+{{ $teamCount - 4 }}</span>
                                                <p class="mb-0" style="margin-top:-5px;">More</p>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="mt-4">
                                        <p class="homeText font-weight-500 text-start">
                                            This month ({{ $upcomingLeaveApplications }}) </p>
                                        @if ($upcomingLeaveRequests)
                                            <div wire:ignore class="mt-2 d-flex align-items-center gap-3 mb-3">
                                                @foreach ($upcomingLeaveRequests->take(3) as $requests)
                                                    @php
                                                        $randomColorList =
                                                            '#' .
                                                            str_pad(dechex(mt_rand(0, 0xffffff)), 6, '0', STR_PAD_LEFT);
                                                    @endphp
                                                    <div wire:ignore class="d-flex gap-4 align-items-center">
                                                        <div class="thisCircle"
                                                            style="border: 1px solid {{ $randomColorList }}">
                                                            <span>{{ substr($requests->employee->first_name, 0, 1) }}{{ substr($requests->employee->last_name, 0, 1) }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                @if ($upcomingLeaveRequests->count() > 3)
                                                    <div
                                                        class="remainContent d-flex flex-column align-items-center">
                                                        <!-- Placeholder color -->
                                                        <span>+{{ $upcomingLeaveRequests->count() - 3 }} </span>
                                                        <span style="margin-top:-5px;">More</span>
                                                    </div>
                                                @endif
                                            </div>
                                        @endif
                                        <p class="homeText"><a href="/team-on-leave-chart">Click here</a> to see
                                            who will be on leave in the upcoming days!</p>
                                    </div>
                                </div>
                            @else
                                <div
                                    style="display:flex;justify-content:center;flex-direction:column;align-items:center;">
                                    <img src="https://i.pinimg.com/originals/52/4c/6c/524c6c3d7bd258cd165729ba9b28a9a2.png"
                                        alt="Image Description" style="width: 120px; height:100px;">
                                    <p class="homeText">
                                        Wow! No leaves planned today.
                                    </p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif




        <div class="col-md-4 mb-4 ">

            <div class="payslip-card">
                <p class="payslip-card-title">Payslip</p>

                @if ($salaryRevision->isEmpty())
                    <p class="payslip-small-desc">
                        We are working on your payslip!
                    </p>
                @else
                    @foreach ($salaryRevision as $salaries)
                        <div wire:ignore class="d-flex justify-content-between align-items-center mt-3">
                            <div style="position: relative;">
                                <!-- {{-- <canvas id="outerPieChart" width="120" height="120"></canvas>
                                                    <canvas id="innerPieChart" width="60" height="60" style="position: absolute; top: 5px;"></canvas> --}} -->
                                <canvas id="combinedPieChart" width="100" height="100"></canvas>
                            </div>
                            <div class="c"
                                style="font-size: 12px; font-weight: normal; font-weight: 500; color: #9E9696;display:flex; flex-direction:column;justify-content:flex-end;">
                                <p style="color:#333;">{{ date('M Y', strtotime('-1 month')) }}</p>
                                <p
                                    style="display:flex;justify-content:end;flex-direction:column;align-items:end; color:#333;">
                                    {{ date('t', strtotime('-1 month')) }} <br>
                                    <span style="color:#778899;">Paid days</span>
                                </p>
                            </div>
                        </div>

                        <div style="display:flex ;flex-direction:column; margin-top:20px;  ">
                            <div class="net-salary">
                                <div style="display:flex;gap:10px;">
                                    <div
                                        style="padding:2px;width:2px;height:17px;background:#000000;border-radius:2px;">
                                    </div>
                                    <p style="font-size:11px;margin-bottom:10px;">Gross Pay</p>
                                </div>
                                <p style="font-size:12px;">
                                    {{ $showSalary ? '₹ ' . number_format($salaries->calculateTotalAllowance(), 2) : '*********' }}
                                </p>
                            </div>
                            <div class="net-salary">
                                <div style="display:flex;gap:10px;">
                                    <div
                                        style="padding:2px;width:2px;height:17px;background:#B9E3C6;border-radius:2px;">
                                    </div>
                                    <p style="font-size:11px;margin-bottom:10px;">Deduction</p>
                                </div>
                                <p style="font-size:12px;">
                                    {{ $showSalary ? '₹ ' . number_format($salaries->calculateTotalDeductions() ?? 0, 2) : '*********' }}
                                </p>

                            </div>
                            <div class="net-salary">
                                <div style="display:flex;gap:10px;">
                                    <div
                                        style="padding:2px;width:2px;height:17px;background:#1C9372;border-radius:2px;">
                                    </div>
                                    <p style="font-size:11px;margin-bottom:10px;">Net Pay</p>
                                </div>
                                @if ($salaries->calculateTotalAllowance() - $salaries->calculateTotalDeductions() > 0)
                                    <p style="font-size:12px;">
                                        {{ $showSalary ? '₹ ' . number_format(max($salaries->calculateTotalAllowance() - $salaries->calculateTotalDeductions(), 0), 2) : '*********' }}
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="show-salary"
                            style="display: flex; color: #1090D8; justify-content:space-between;font-size: 12px;  margin-top: 20px; font-weight: 100;">
                            <a href="/your-download-route" id="pdfLink2023_4" class="pdf-download"
                                download>Download PDF</a>
                            <a wire:click="toggleSalary" class="showHideSalary">
                                {{ $showSalary ? 'Hide Salary' : 'Show Salary' }}
                            </a>
                        </div>
                    @endforeach
                @endif

                <a href="/slip">
                    <div class="payslip-go-corner">
                        <div class="payslip-go-arrow">→</div>
                    </div>
                </a>

            </div>
        </div>

        <div class="col-md-4 mb-4 ">

            <div class="payslip-card mb-3">
                <p class="payslip-card-title">Quick Access</p>
                <!-- <p class="small-desc">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat
veritatis nobis saepe itaque rerum nostrum aliquid obcaecati odio
officia deleniti. Expedita iste et illum, quaerat pariatur consequatur
eum nihil itaque!
</p> -->
                <div style="display: flex; justify-content: space-between; position: relative;">
                    <div class="quick col-md-7 px-3 py-0 ps-0">
                        <a href="/reimbursement" class="quick-link">Reimbursement</a>
                        <a href="/itstatement" class="quick-link">IT Statement</a>
                        <a href="#" class="quick-link">YTD Reports</a>
                        <a href="#" class="quick-link">Loan Statement</a>
                    </div>
                    <div class="col-md-5"
                        style="text-align: center; background-color: #FFF8F0; padding: 5px 10px; border-radius: 10px; font-size: 8px; font-family: montserrat; position: absolute; bottom: 0; right: 0;">
                        <img src="images/quick_access.png" style="padding-top: 2em; width: 6em">
                        <p class="pt-4">Use quick access to view important salary details.</p>
                    </div>
                </div>
                <div class="payslip-go-corner">
                    <div class="payslip-go-arrow">→</div>
                </div>
            </div>

            <div class="payslip-card mb-3">
                <p class="payslip-card-title">POI</p>
                <p class="payslip-small-desc">
                    Hold on! You can submit your Proof of Investments (POI) once released.
                </p>
                <a href="#">
                    <div class="payslip-go-corner">
                        <div class="payslip-go-arrow">→</div>
                    </div>
                </a>
            </div>
        </div>


        <div class="col-md-4 mb-4 ">

            <div class="payslip-card mb-3">
                {{-- <p class="payslip-card-title">Track</p> --}}
                <!-- <p class="small-desc">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat
veritatis nobis saepe itaque rerum nostrum aliquid obcaecati odio
officia deleniti. Expedita iste et illum, quaerat pariatur consequatur
eum nihil itaque!
</p> -->
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="payslip-card-title">Overview</h5>
                        <div>
                            <select class="form-select custom-select-width" wire:change="$set('filterPeriod', $event.target.value)">
                                <option value="this_month" selected>This month</option>
                                <option value="last_month">Last month</option>
                                <option value="this_year">This year</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            @if ($totalTasksCount)
                                <p class="track-text"> Total Tasks: <span
                                        class="track-count">{{ $totalTasksCount }}</span> </p>
                            @else
                                <p class="track-text"> Total Tasks: <span class="track-count">0</span></p>
                            @endif
                        </div>
                      

                        {{-- @if ($countAssignedByOpen > 0 && $countAssignedToOpen > 0)
                            pending tasks {{ $countAssignedByOpen + $countAssignedToOpen }}
                        @endif --}}
                        <div>
                            @if ($taskCount > 0)
                                <p data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Task Requests: {{ ucwords(strtolower($employeeNames)) }}"
                                    class="track-text">New Tasks: <span
                                        class="track-count">{{ $taskCount }}</span></p>
                            @endif
                        </div>

                        {{-- <p class="payslip-card-title">Task Overview</p> --}}
                    </div>

                    <div class="row text-center mt-3">
                        <div class="col-4">
                            <h3 class="text-primary mb-1 track-text">{{ $TaskAssignedToCount }}</h3>
                            <p class="mb-0 track-text">Tasks Assigned</p>
                        </div>
                        <div class="col-4">
                            <h3 class="text-success mb-1 track-text">{{ $TasksCompletedCount }}</h3>
                            <p class="mb-0 track-text">Tasks Completed</p>
                        </div>
                        <div class="col-4">
                            <h3 class="text-warning mb-1 track-text">{{ $TasksInProgressCount }}</h3>
                            <p class="mb-0 track-text">Tasks In Progress</p>
                        </div>
                    </div>
                </div>
                <a href="/tasks">
                    <div class="payslip-go-corner">
                        <div class="payslip-go-arrow">→</div>
                    </div>
                </a>
            </div>

            <div class="payslip-card mb-3">
                <p class="payslip-card-title">IT Declaration</p>
                <p class="payslip-small-desc">
                    Hurrah! Considered your IT declaration for Apr 2023.
                </p>
                <a href="/formdeclaration">
                    <div class="payslip-go-corner">
                        <div class="payslip-go-arrow">→</div>
                    </div>
                </a>
            </div>

        </div>


        @if ($showAlertDialog)
            <div class="modal" tabindex="-1" role="dialog" style="display: block;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: rgb(2, 17, 79); height: 50px">
                            <h5 style="padding: 5px; color: white; font-size: 15px;" class="modal-title">
                                <b>Swipes</b>
                            </h5>
                            <button type="button" class="btn-close btn-primary" data-dismiss="modal"
                                aria-label="Close" wire:click="close"
                                style="background-color: white; height:10px;width:10px;">
                            </button>
                        </div>
                        <div class="modal-body" style="max-height:300px;overflow-y:auto">
                            <div class="row">
                                <div class="col" style="font-size: 12px;color:#778899;font-weight:500;">Date :
                                    <span style="color: #333;">{{ $currentDate }}</span>
                                </div>
                                <div class="col" style="font-size: 12px;color:#778899;font-weight:500;">Shift
                                    Time : <span style="color: #333;">10:00 to 19:00</span></div>
                            </div>
                            <table class="swipes-table mt-2 border" style="width: 100%;">
                                <tr style="background-color: #f6fbfc;">
                                    <th
                                        style="width:50%;font-size: 12px; text-align:start;padding:5px 10px;color:#778899;font-weight:500;">
                                        Swipe Time</th>
                                    <th
                                        style="width:50%;font-size: 12px; text-align:start;padding:5px 10px;color:#778899;font-weight:500;">
                                        Sign-In / Sign-Out</th>
                                </tr>

                                @if (!is_null($swipeDetails) && $swipeDetails->count() > 0)
                                    @foreach ($swipeDetails as $swipe)
                                        <tr style="border:1px solid #ccc;">
                                            <td
                                                style="width:50%;font-size: 10px; color: #778899;text-align:start;padding:5px 10px">
                                                {{ $swipe->swipe_time }}</td>
                                            <td
                                                style="width:50%;font-size: 10px; color: #778899;text-align:start;padding:5px 10px">
                                                {{ $swipe->in_or_out }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="homeText" colspan="2">No swipe records found for today.</td>
                                    </tr>
                                @endif

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-backdrop fade show blurred-backdrop"></div>
        @endif
        @if($showAllAbsentEmployees)
        <div class="modal" tabindex="-1" role="dialog" style="display: block;">
              <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(2, 17, 79); height: 50px">
                                    <h5 style="padding: 5px; color: white; font-size: 15px;" class="modal-title"><b>{{$whoisinTitle}}</b></h5>
                                    <button type="button" class="btn-close btn-primary" data-dismiss="modal" aria-label="Close" wire:click="closeAllAbsentEmployees" style="background-color: white; height:10px;width:10px;">
                                    </button>
                                </div>
                                <div class="modal-body" style="max-height:300px;overflow-y:auto">
                                    <div class="who-is-in d-flex flex-column justify-content-start ">
                                        <p class="section-name">
                                            {{$whoisinTitle}} ({{ $CountAbsentEmployees }})
                                        </p>
                                            <div class="team-leave d-flex flex-row gap-3">


                                                @for ($i = 0; $i <$CountAbsentEmployees; $i++) 
                                                      @if(isset($AbsentEmployees[$i])) 
                                                           @php 
                                                               $employee=$AbsentEmployees[$i]; 
                                                               $randomColorAbsent='#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0' , STR_PAD_LEFT); 
                                                           @endphp 
                                                           <a href="/whoisinchart" style="text-decoration: none;">
                                                                <div class="thisCircle" style="border: 2px solid {{getRandomAbsentColor() }};" data-toggle="tooltip" data-placement="top" title="{{ ucwords(strtolower($employee['first_name'])) }} {{ ucwords(strtolower($employee['last_name'])) }}">
                                                                        <span class="initials">
                                                                            {{ strtoupper(substr(trim($employee['first_name']), 0, 1)) }}{{ strtoupper(substr(trim($employee['last_name']), 0,1)) }}
                                                                        </span>
                                                                </div>
                                                           </a>
                                                       @endif
                                                @endfor
                                            </div>
                                    </div>
                                </div>
                           </div>
                       </div>
                   </div>
             <div class="modal-backdrop fade show blurred-backdrop"></div>
        @endif
        @if($showAllLateEmployees)
        <div class="modal" tabindex="-1" role="dialog" style="display: block;">
              <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(2, 17, 79); height: 50px">
                                    <h5 style="padding: 5px; color: white; font-size: 15px;" class="modal-title"><b>{{$whoisinTitle}}</b></h5>
                                    <button type="button" class="btn-close btn-primary" data-dismiss="modal" aria-label="Close" wire:click="closeAllLateEmployees" style="background-color: white; height:10px;width:10px;">
                                    </button>
                                </div>
                                <div class="modal-body" style="max-height:300px;overflow-y:auto">
                                    <div class="who-is-in d-flex flex-column justify-content-start ">
                                        <p class="section-name">
                                            {{$whoisinTitle}} ({{ $CountLateSwipes }})
                                        </p>
                                            <div class="team-leave d-flex flex-row gap-3">


                                                @for ($i = 0; $i <$CountLateSwipes; $i++) 
                                                      @if(isset($LateSwipes[$i])) 
                                                           @php 
                                                               $employee=$LateSwipes[$i]; 
                                                               $randomColorLate='#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0' , STR_PAD_LEFT); 
                                                           @endphp 
                                                           <a href="/whoisinchart" style="text-decoration: none;">
                                                                <div class="thisCircle" style="border: 2px solid {{getRandomLateColor() }};" data-toggle="tooltip" data-placement="top" title="{{ ucwords(strtolower($employee['first_name'])) }} {{ ucwords(strtolower($employee['last_name'])) }}">
                                                                        <span class="initials">
                                                                            {{ strtoupper(substr(trim($employee['first_name']), 0, 1)) }}{{ strtoupper(substr(trim($employee['last_name']), 0,1)) }}
                                                                        </span>
                                                                </div>
                                                           </a>
                                                       @endif
                                                @endfor
                                            </div>
                                    </div>
                                </div>
                           </div>
                       </div>
                   </div>
             <div class="modal-backdrop fade show blurred-backdrop"></div>
        @endif
        @if($showAllEarlyEmployees)
        <div class="modal" tabindex="-1" role="dialog" style="display: block;">
              <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(2, 17, 79); height: 50px">
                                    <h5 style="padding: 5px; color: white; font-size: 15px;" class="modal-title"><b>{{$whoisinTitle}}</b></h5>
                                    <button type="button" class="btn-close btn-primary" data-dismiss="modal" aria-label="Close" wire:click="closeAllEarlyEmployees" style="background-color: white; height:10px;width:10px;">
                                    </button>
                                </div>
                                <div class="modal-body" style="max-height:300px;overflow-y:auto">
                                    <div class="who-is-in d-flex flex-column justify-content-start ">
                                        <p class="section-name">
                                            {{$whoisinTitle}} ({{ $CountEarlySwipes }})
                                        </p>
                                            <div class="team-leave d-flex flex-row gap-3">


                                                @for ($i = 0; $i <$CountEarlySwipes; $i++) 
                                                      @if(isset($EarlySwipes[$i])) 
                                                           @php 
                                                               $employee=$EarlySwipes[$i]; 
                                                               $randomColorEarly='#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0' , STR_PAD_LEFT); 
                                                           @endphp 
                                                           <a href="/whoisinchart" style="text-decoration: none;">
                                                                <div class="thisCircle" style="border: 2px solid {{getRandomEarlyColor() }};" data-toggle="tooltip" data-placement="top" title="{{ ucwords(strtolower($employee['first_name'])) }} {{ ucwords(strtolower($employee['last_name'])) }}">
                                                                        <span class="initials">
                                                                            {{ strtoupper(substr(trim($employee['first_name']), 0, 1)) }}{{ strtoupper(substr(trim($employee['last_name']), 0,1)) }}
                                                                        </span>
                                                                </div>
                                                           </a>
                                                       @endif
                                                @endfor
                                            </div>
                                    </div>
                                </div>
                           </div>
                       </div>
                   </div>
             <div class="modal-backdrop fade show blurred-backdrop"></div>
        @endif
    </div>
</div>

</div>
<script>
    // Function to check if an element is in the viewport
    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Function to check for elements to fade in
    function checkFadeIn() {
        // alert("scroll");
        const fadeInSection = document.querySelectorAll('.');
        fadeInSection.forEach((element) => {
            if (isElementInViewport(element)) {
                element.classList.add('fade-in');
            }
        });
    }

    // Initial check on page load
    window.addEventListener('load', checkFadeIn);
    var combinedData = {
        datasets: [{
                data: [{
                        {
                            !empty($salaries) ? $salaries - > calculateTotalAllowance() : 0
                        }
                    },
                    2, // Placeholder value for the second dataset
                ],
                backgroundColor: [
                    '#000000', // Color for Gross Pay
                ],
            },
            {
                data: [{
                        {
                            !empty($salaries) && method_exists($salaries, 'calculateTotalDeductions') ?
                                $salaries - > calculateTotalDeductions() : 0
                        }
                    },
                    {
                        {
                            !empty($salaries) && method_exists($salaries, 'calculateTotalAllowance') ?
                                $salaries - > calculateTotalAllowance() - $salaries - >
                                calculateTotalDeductions() : 0
                        }
                    },
                ],
                backgroundColor: [
                    '#B9E3C6', // Color for Deductions
                    '#1C9372', // Color for Net Pay
                ],
            },
        ],
    };

    var outerCtx = document.getElementById('combinedPieChart').getContext('2d');

    var combinedPieChart = new Chart(outerCtx, {
        type: 'doughnut',
        data: combinedData,
        options: {
            cutout: '60%', // Adjust the cutout to control the size of the outer circle
            legend: {
                display: false,
            },
            tooltips: {
                enabled: false,
            },
        },
    });
</script>
