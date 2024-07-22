<x-app-layout>
    <div class="container-fluid">
        <!-- Page title & breadcrumb -->
        <x-breadcrumb />
        <div class="fx-card container-fluid">
            <div class="row mb-3">
                <div class="col-md-12 text-center mt-3">
                    <img src="../assets/img/logo/Full_Size_DepEd_Official_Seal2.png" class="img-fluid" alt="logo"
                        style="width:10%;" />
                    <h5 class="fx-card-title text-center mt-1 fw-bolder">COT - RPMS
                    </h5>
                    <h6 class="fx-card-title text-center mt-2 text-primary fw-bolder">MASTER TEACHER I-IV</h6>
                </div>
            </div>
            <div class="row">
                <form action="">
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-control form-select" name="extension" id="office-select"
                                                aria-label="">
                                                <option value="">Select School</option>
                                            </select>
                                            <label class="sellabel">Name of School<span
                                                    class="text-danger">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-control form-select text-sm" id="floatingSelectGrid"
                                                aria-label="Floating label select example">
                                                <option selected>Select Teacher</option>
                                                <option value="1">Name 1</option>
                                                <option value="2">Name 2</option>
                                                <option value="3">Name 3</option>
                                            </select>
                                            <label for="floatingSelectGrid">School Teacher</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-control form-select text-sm" id="floatingSelectGrid"
                                                aria-label="Floating label select example">
                                                <option selected>Select Grade Level</option>
                                                <option value="k">Kindergarten</option>
                                                <option value="1">Grade 1</option>
                                                <option value="2">Grade 2</option>
                                                <option value="3">Grade 3</option>
                                                <option value="4">Grade 4</option>
                                                <option value="5">Grade 5</option>
                                                <option value="6">Grade 6</option>
                                                <option value="7">Grade 7</option>
                                                <option value="8">Grade 8</option>
                                                <option value="9">Grade 9</option>
                                                <option value="10">Grade 10</option>
                                                <option value="11">Grade 11</option>
                                                <option value="12">Grade 12</option>
                                            </select>
                                            <label for="floatingSelectGrid">Grade Level</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="floatingSelectGrid">Observation Period: </label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                            <label class="form-check-label mx-2" for="inlineCheckbox1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2">
                                            <label class="form-check-label mx-2" for="inlineCheckbox2">2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                            <label class="form-check-label mx-2" for="inlineCheckbox1">3</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2">
                                            <label class="form-check-label mx-2" for="inlineCheckbox2">4</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <select class="form-control form-select text-sm" id="floatingSelectGrid"
                                            aria-label="Floating label select example">
                                            <option selected>Select Subject</option>
                                            <option value="English">English</option>
                                            <option value="Science">Science</option>
                                            <option value="Mathematics">Mathematics</option>
                                            <option value="Filipino">Filipino</option>
                                            <option value="Aral Pan">Aral Pan</option>
                                            <option value="TLE/EPP">TLE/EPP</option>
                                            <option value="MAPEH/MSEP">MAPEH/MSEP</option>
                                            <option value="ValEd/ESP">ValEd/ESP</option>
                                            <option value="Kindergarten">Kindergarten</option>
                                            <option value="MTB/MLE">MTB/MLE</option>
                                            <option value="Senior High">Senior High</option>
                                            <option value="Special">Special</option>
                                        </select>
                                        <label for="floatingSelectGrid">Subject Area</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control" id="floatingInput">
                                            <label for="floatingInput">Date</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="time" class="form-control" id="floatingInput">
                                            <label for="floatingInput">Time</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                    <div class="fx-card-content card-default">
                                <div class="deal-table">
                                    <div class="container-fluid">
                                        <table id="" class="table">
                                            <thead class="table__thead">
                                                <tr class="table-primary">
                                                    <th>The Teacher:</th>
                                                    <th class="text-center">3</th>
                                                    <th class="text-center">4</th>
                                                    <th class="text-center">5</th>
                                                    <th class="text-center">6</th>
                                                    <th class="text-center">7</th>
                                                    <th class="text-center">No</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table__tbody">
                                                <tr class="table-row" data-question="1">
                                                    <td class="table-row__td" data-column="Question No. 1">
                                                        <div class="table-row--info me-3"></div>
                                                        <p class="custom-p__table question">
                                                        1. Applies knowledge of content within and across curriculum teaching areas.
                                                        </p>
                                                    </td>
                                                    <td class="td-opt" data-column="3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="1" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="2" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="3" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="4" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="7">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="5" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>
                                                    <td class="td-opt" data-column="NO">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="5" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="table-row" data-question="2">
                                                    <td class="table-row__td" data-column="Question No. 2">
                                                        <div class="table-row--info mr-3"></div>
                                                        <p class="custom-p__table question">
                                                        2. Applies a range of teaching strategies to develop critical and creative thinking, as well as other higher-order thinking skills.
                                                        </p>
                                                    </td>
                                                    <td class="td-opt" data-column="3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="1" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="2" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="3" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="4" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="7">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="5" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>
                                                    <td class="td-opt" data-column="NO">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="5" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="table-row" data-question="3">
                                                    <td class="table-row__td" data-column="Question No. 3">
                                                        <div class="table-row--info mr-3"></div>
                                                        <p class="custom-p__table question">
                                                        3. Manages classroom structure to engage learners, individually or in groups, in meaningful exploration, discovery and hands-on activities within a range of physical learning environments.
                                                        </p>
                                                    </td>
                                                    <td class="td-opt" data-column="3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="1" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="2" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="3" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="4" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="7">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="5" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>
                                                    <td class="td-opt" data-column="NO">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="5" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="table-row" data-question="4">
                                                    <td class="table-row__td" data-column="Question No. 4">
                                                        <div class="table-row--info mr-3"></div>
                                                        <p class="custom-p__table question">
                                                        4. Manages learner behavior constructively by applying positive and nonviolent discipline to ensure learning-focused environments .
                                                        </p>
                                                    </td>
                                                    <td class="td-opt" data-column="3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="1" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="2" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="3" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="4" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="7">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="5" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>
                                                    <td class="td-opt" data-column="NO">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="5" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="table-row" data-question="5">
                                                    <td class="table-row__td" data-column="Question No. 5">
                                                        <div class="table-row--info mr-3"></div>
                                                        <p class="custom-p__table question">
                                                        5. Plans, manages and implements developmentally sequenced teaching and learning processes to meet curriculum requirements and varied teaching contexts .
                                                        </p>
                                                    </td>
                                                    <td class="td-opt" data-column="3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="1" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="2" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="3" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="4" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>

                                                    <td class="td-opt" data-column="7">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="5" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>
                                                    <td class="td-opt" data-column="NO">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="5" id="flexCheckIndeterminate">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="table-row table-category-color p-0 table-total__tally table-primary">
                                                    <td class="text-end">
                                                        <b>TOTAL</b>
                                                    </td>
                                                    <td class="text-center">
                                                        <b class="c-1">0</b>
                                                    </td>
                                                    <td class="text-center">
                                                        <b class="c-2">0</b>
                                                    </td>
                                                    <td class="text-center">
                                                        <b class="c-3">0</b>
                                                    </td>
                                                    <td class="text-center">
                                                        <b class="c-4">0</b>
                                                    </td>
                                                    <td class="text-center">
                                                        <b class="c-5">0</b>
                                                    </td>
                                                    <td class="text-center">
                                                        <b class="c-6">0</b>
                                                    </td>
                                                </tr>

                                                <tr class="table-row p-0 table-total_result">
                                                    <td class="text-end fw-bold table-total__p">
                                                        <p class="m-0">AVERAGE (TOTAL/<span
                                                                id="totalQuestions"></span>)
                                                        </p>
                                                    </td>
                                                    <td colspan="8" class="table-total__p">
                                                        <p class="text-center average m-0">0.00</p>
                                                    </td>
                                                </tr>
                                                <tr class="table-row p-0 table-total_result">
                                                    <td class="text-end fw-bold table-total__p">
                                                        <p class="m-0 table-row__descriptive">DESCRIPTIVE
                                                            RATING</p>
                                                    </td>
                                                    <td colspan="8" class="table-total__p">
                                                        <p class="text-center rating m-0">Poor</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        <div>
                            <div class="form-floating mt-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Comments</label>
                            </div>
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="">
                                            <label for="floatingInput">Observer:</label>
                                            <small>Supervisor</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="">
                                            <label for="floatingInput">Conforme:</label>
                                            <small>School Head</small>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <button type="button" class="btn btn-primary"><i class="ri-save-line"></i>
                            Save</button>
                    </div>
            </div>

        </div>
    </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            let lastCheckedPerRow = {};

            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('click', function() {
                    const rowId = this.closest('tr').rowIndex;
                    if (lastCheckedPerRow[rowId] && lastCheckedPerRow[rowId] !== this) {
                        lastCheckedPerRow[rowId].checked = false;
                    }
                    lastCheckedPerRow[rowId] = this;
                });
            });
        });
    </script>

</x-app-layout>