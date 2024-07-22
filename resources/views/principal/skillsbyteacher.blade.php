<x-app-layout>
    <div class="container-fluid">
        <!-- Page title & breadcrumb -->
        <x-breadcrumb />
        <div class="fx-card container-fluid">
            <div class="row">
                <div class="col-md-12 text-center mt-3">
                    <img src="../assets/img/logo/Full_Size_DepEd_Official_Seal2.png" class="img-fluid" alt="logo"
                        style="width:10%;" />
                    <h3 class="fx-card-title text-center mt-1 fw-bolder">COT-RPMS Summary</h3>
                    <h4 class="fx-card-title text-center mt-2 text-success fw-bolder">By Skills (Teacher)</h4>
                    <h3 class="fx-card-title text-center mt-1 fw-bolder">Total - Quarter #</h3>
                </div>
            </div>
            <div class="row">
            <div class="form-group mb-3 px-4">
                    <label for="grade-level" class="form-label">Select Quarter to Display</label>
                    <div class="d-flex">
                        <select class="form-control me-2" id="quarter-display">
                            <option value="">--Select a Quarter--</option>
                            <option value="">Quarter 1</option>
                            <option value="">Quarter 2</option>
                            <option value="">Quarter 3</option>
                            <option value="">Quarter 4</option>
                        </select>
                        <button type="button" class="btn btn-primary">Select</button>
                    </div>
                </div>
                <div id="dealtbl">
                    <div class="fx-card-header">
                        <h4 class="fx-card-title">Evaluation/Rating</h4>
                        <div class="header-tools">
                            <a href="javascript:void(0)" class="m-r-10 fx-full-card"><i
                                    class="ri-fullscreen-line" title="Full Screen"></i></a>
                        </div>
                    </div>
                    <div class="fx-card-content card-default">
                        <div class="deal-table">
                            <div class="table-responsive">
                                <table id="recent-employee-table" class="table">
                                    <thead>
                                        <tr class="table-success">
                                            <th >Statement</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                            <th>6</th>
                                            <th>7</th>
                                            <th>NO</th>
                                            <th>TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><p>1. Applies knowledge of content within and across curriculum teaching areas.</p></td>
                                            <td><p>1</p></td>
                                            <td><p>1</p></td>
                                            <td><p>0</p></td>
                                            <td><p>0</p></td>
                                            <td><p>3</p></td>
                                            <td><p>0</p></td>
                                            <td><p>5/68</p></td>
                                        </tr>
                                        <tr>
                                            <td><p>2. Uses a range of teaching strategies that enhance learning achievement in literacy and numeracy skills.</p></td>
                                            <td><p>2</p></td>
                                            <td><p>0</p></td>
                                            <td><p>0</p></td>
                                            <td><p>0</p></td>
                                            <td><p>3</p></td>
                                            <td><p>0</p></td>
                                            <td><p>5/68</p></td>
                                        </tr>
                                        <tr>
                                            <td><p>3. Applies a range of teaching strategies to develop critical and creative thinking, as well asother higher-order thinking skills.</p></td>
                                            <td><p>2</p></td>
                                            <td><p>0</p></td>
                                            <td><p>0</p></td>
                                            <td><p>0</p></td>
                                            <td><p>3</p></td>
                                            <td><p>0</p></td>
                                            <td><p>5/68</p></td>
                                        </tr>  
                                        <tr>
                                            <td><p>4. Manages classroom structure to engage learners,individually or in group,in meaningful exploration,discovery and hands-on activities within a range of physical learning environments.</p></td>
                                            <td><p>2</p></td>
                                            <td><p>0</p></td>
                                            <td><p>0</p></td>
                                            <td><p>0</p></td>
                                            <td><p>3</p></td>
                                            <td><p>0</p></td>
                                            <td><p>5/68</p></td>
                                        </tr>
                                        <tr>
                                            <td><p>5. Manages learner behavior constructively by applying positive and non-violent descipline to ensure learning-focused environments.</p></td>
                                            <td><p>2</p></td>
                                            <td><p>0</p></td>
                                            <td><p>0</p></td>
                                            <td><p>0</p></td>
                                            <td><p>3</p></td>
                                            <td><p>0</p></td>
                                            <td><p>5/68</p></td>
                                        </tr>
                                        <tr>
                                            <td><p>6. Uses differentiated,developmentall appropriate learning experiences to address learners' gender,needs,strengths,interest, and experiences.</p></td>
                                            <td><p>1</p></td>
                                            <td><p>0</p></td>
                                            <td><p>0</p></td>
                                            <td><p>0</p></td>
                                            <td><p>3</p></td>
                                            <td><p>0</p></td>
                                            <td><p>4/68</p></td>
                                        </tr>
                                        <tr>
                                            <td><p>7. Plans,manages and implements developmentally sequenced teaching and learning processes to meet curriculum requirements and varied teaching contexts.</p></td>
                                            <td><p>1</p></td>
                                            <td><p>0</p></td>
                                            <td><p>0</p></td>
                                            <td><p>0</p></td>
                                            <td><p>3</p></td>
                                            <td><p>0</p></td>
                                            <td><p>4/68</p></td>
                                        </tr>
                                        <tr>
                                            <td><p>8. Selects,develops,organizes, and uses appropriate teaching and learning resources,including ICT,to address learning goals.</p></td>
                                            <td><p>1</p></td>
                                            <td><p>0</p></td>
                                            <td><p>0</p></td>
                                            <td><p>0</p></td>
                                            <td><p>3</p></td>
                                            <td><p>0</p></td>
                                            <td><p>4/68</p></td>
                                        </tr>  
                                        <tr>
                                            <td><p>9. Designs,selects,organizes,and uses diagnostic,formative and summative assessment strategies consistent with curriculum requirements.</p></td>
                                            <td><p>1</p></td>
                                            <td><p>0</p></td>
                                            <td><p>0</p></td>
                                            <td><p>0</p></td>
                                            <td><p>3</p></td>
                                            <td><p>0</p></td>
                                            <td><p>4/68</p></td>
                                        </tr>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</x-app-layout>